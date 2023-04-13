INSERT INTO exercises (name, chest, back, shoulders, biceps, triceps, abs, quads, hamstrings, calves, glutes) VALUES
('Barbell Lunges', null, null, null, null, null, null, 0.5, 0.3, 0.2, null),
('Front Squats', null, null, null, null, null, null, 0.5, 0.4, 0.1, null),
('Romanian Deadlifts', null, 0.2, null, null, null, null, null, 0.7, 0.1, null),
('Single-Leg Deadlifts', null, 0.1, null, null, null, null, null, 0.8, null, null),
('Incline Bench Press', 0.6, null, 0.3, 0.1, 0.1, null, null, null, null, null),
('Decline Bench Press', 0.6, null, 0.3, 0.1, 0.1, null, null, null, null, null),
('Dumbbell Shoulder Press', null, null, 0.8, null, 0.1, null, null, null, null, null),
('Dumbbell Lateral Raises', null, null, 0.9, null, null, null, null, null, null, null),
('Dumbbell Front Raises', null, null, 0.8, null, null, null, null, null, null, null),
('Hammer Curls', null, 0.1, null, 0.7, null, null, null, null, null, null);

INSERT INTO exercises (name, chest, back, shoulders, biceps, triceps, abs, quads, hamstrings, calves, glutes)
VALUES
('Preacher Curls', NULL, NULL, NULL, 0.1, NULL, NULL, NULL, NULL, NULL, NULL),
('Concentration Curls', NULL, NULL, NULL, 0.1, NULL, NULL, NULL, NULL, NULL, NULL),
('Close-Grip Bench Press', NULL, NULL, 0.1, 0.1, 0.1, NULL, NULL, NULL, NULL, NULL),
('Dumbbell Skull Crushers', NULL, NULL, NULL, NULL, 0.1, NULL, NULL, NULL, NULL, NULL),
('Triceps Dips', NULL, NULL, NULL, NULL, 0.2, NULL, NULL, NULL, NULL, NULL),
('Cable Pushdowns', NULL, NULL, NULL, NULL, 0.1, NULL, NULL, NULL, NULL, NULL),
('Cable Overhead Extensions', NULL, NULL, NULL, NULL, 0.1, NULL, NULL, NULL, NULL, NULL),
('Cable Rows with Rope Attachment', NULL, 0.1, 0.1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Seated Leg Curls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.1, NULL, NULL),
('Glute-Ham Raises', NULL, 0.1, NULL, NULL, NULL, NULL, NULL, 0.3, NULL, 0.4);


INSERT INTO exercises (name, chest, back, shoulders, biceps, triceps, forearms, abs, quads, hamstrings, calves, glutes) VALUES
('Side Lunges', NULL, NULL, 0.05, NULL, NULL, NULL, 0.7, 0.25, NULL, NULL, NULL),
('Box Jumps', NULL, NULL, 0.05, NULL, NULL, NULL, NULL, 0.95, NULL, NULL, NULL),
('Split Squats', NULL, NULL, 0.05, NULL, NULL, NULL, 0.6, 0.4, NULL, NULL, NULL),
('Bulgarian Split Squats', NULL, NULL, 0.05, NULL, NULL, NULL, 0.6, 0.4, NULL, NULL, NULL),
('Pistol Squats', NULL, NULL, 0.05, NULL, NULL, NULL, 0.8, 0.2, NULL, NULL, NULL),
('Goblet Squats', NULL, NULL, 0.05, NULL, NULL, NULL, 0.7, 0.3, NULL, NULL, NULL),
('Seated Calf Raises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
('Standing Calf Raises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
('Hip Abductions', NULL, NULL, 0.05, NULL, NULL, NULL, NULL, NULL, NULL, 0.95, NULL),
('Hip Adductions', NULL, NULL, 0.05, NULL, NULL, NULL, NULL, NULL, NULL, 0.95, NULL);



INSERT INTO exercises (name, chest, back, shoulders, biceps, triceps, forearms, abs, quads, hamstrings, calves, glutes)
VALUES
('Band Pull-Aparts', null, 0.4, 0.6, 0.3, 0.2, null, null, null, null, null, null),
('Rear Delt Flyes', null, 0.3, 0.7, null, null, null, null, null, null, null, null),
('Pallof Press', null, 0.2, 0.5, 0.2, 0.2, null, 0.1, null, null, null, null),
('Ab Wheel Rollouts', null, null, null, null, null, null, 0.6, null, null, null, null),
('Bicycle Crunches', null, null, null, null, null, null, 0.4, null, null, null, null),
('Hanging Knee Raises', null, null, null, null, null, null, 0.4, null, null, null, null),
('Pull-Throughs', null, 0.2, 0.2, null, null, 0.7, null, 0.3, null, null, null),
('Good Mornings', null, 0.3, null, null, null, 0.7, null, 0.7, null, null, null),
('Hack Squats', null, null, null, null, null, null, null, 0.7, null, null, 0.5),
('Reverse Lunges', null, null, null, null, null, null, null, 0.7, null, null, 0.3);


INSERT INTO exercises (name, muscle_group_1, muscle_group_2, muscle_group_3, muscle_group_4, muscle_group_5, muscle_group_6)
VALUES
('Box Squats', 0.5, 0.8, 0.3, NULL, NULL, NULL),
('Sumo Deadlifts', 0.8, 0.7, 0.3, 0.2, NULL, NULL),
('Farmers Walks', 0.2, 0.5, 0.4, 0.1, NULL, NULL),
('Sled Pushes', 0.5, 0.6, 0.4, NULL, NULL, NULL),
('Battle Rope Slams', 0.3, 0.6, 0.2, NULL, NULL, NULL),
('Medicine Ball Throws', 0.5, 0.7, 0.2, NULL, NULL, NULL),
('Kettlebell Swings', 0.7, 0.3, 0.2, NULL, NULL, NULL),
('Kettlebell Goblet Squats', 0.7, 0.8, 0.3, NULL, NULL, NULL),
('Kettlebell Turkish Get-Ups', 0.5, 0.7, 0.4, 0.2, NULL, NULL),
('Plyometric Box Jumps', 0.5, 0.7, 0.2, NULL, NULL, NULL);
