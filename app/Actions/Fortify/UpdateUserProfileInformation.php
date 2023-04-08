<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name'   => ['required', 'string', 'max:255'],
            'email'  => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo'  => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'weight' => ['nullable', 'integer', 'max:255'],
            'gender' => ['nullable', 'string', 'max:10'],
            'age'    => ['nullable', 'integer', 'max:255'],
            'height' => ['nullable', 'integer', 'max:255'],
            'weight_unit' => ['nullable', 'string', 'max:4'],
            'height_unit' => ['nullable', 'string', 'max:4'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name'        => $input['name'],
                'email'       => $input['email'],
                'weight'      => $input['weight'],
                'gender'      => $input['gender'],
                'age'         => $input['age'],
                'height'      => $input['height'],
                'weight_unit' => $input['weight_unit'],
                'height_unit' => $input['height_unit'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name'        => $input['name'],
            'email'       => $input['email'],
            'weight'      => $input['weight'],
            'gender'      => $input['gender'],
            'age'         => $input['age'],
            'height'      => $input['height'],
            'weight_unit' => $input['weight_unit'],
            'height_unit' => $input['height_unit'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
