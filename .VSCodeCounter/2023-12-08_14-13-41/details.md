# Details

Date : 2023-12-08 14:13:41

Directory d:\\Code\\PAD\\SI-Lab-TRPL

Total : 223 files,  19447 codes, 1987 comments, 1843 blanks, all 23277 lines

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)

## Files
| filename | language | code | comment | blank | total |
| :--- | :--- | ---: | ---: | ---: | ---: |
| [README.md](/README.md) | Markdown | 45 | 0 | 22 | 67 |
| [app/Console/Kernel.php](/app/Console/Kernel.php) | PHP | 15 | 7 | 6 | 28 |
| [app/Exceptions/Handler.php](/app/Exceptions/Handler.php) | PHP | 17 | 9 | 5 | 31 |
| [app/Http/Controllers/AnnouncementController.php](/app/Http/Controllers/AnnouncementController.php) | PHP | 37 | 4 | 9 | 50 |
| [app/Http/Controllers/AssistantController.php](/app/Http/Controllers/AssistantController.php) | PHP | 246 | 7 | 50 | 303 |
| [app/Http/Controllers/AuthenticationController.php](/app/Http/Controllers/AuthenticationController.php) | PHP | 40 | 0 | 12 | 52 |
| [app/Http/Controllers/Controller.php](/app/Http/Controllers/Controller.php) | PHP | 9 | 0 | 4 | 13 |
| [app/Http/Controllers/DashboardController.php](/app/Http/Controllers/DashboardController.php) | PHP | 17 | 0 | 4 | 21 |
| [app/Http/Controllers/InventoryController.php](/app/Http/Controllers/InventoryController.php) | PHP | 73 | 0 | 9 | 82 |
| [app/Http/Controllers/LandingpageController.php](/app/Http/Controllers/LandingpageController.php) | PHP | 66 | 0 | 6 | 72 |
| [app/Http/Controllers/ProjectController.php](/app/Http/Controllers/ProjectController.php) | PHP | 130 | 6 | 17 | 153 |
| [app/Http/Controllers/ReserveController.php](/app/Http/Controllers/ReserveController.php) | PHP | 136 | 10 | 33 | 179 |
| [app/Http/Controllers/ScheduleController.php](/app/Http/Controllers/ScheduleController.php) | PHP | 166 | 31 | 43 | 240 |
| [app/Http/Controllers/UserController.php](/app/Http/Controllers/UserController.php) | PHP | 55 | 0 | 9 | 64 |
| [app/Http/Kernel.php](/app/Http/Kernel.php) | PHP | 43 | 22 | 7 | 72 |
| [app/Http/Middleware/Auth.php](/app/Http/Middleware/Auth.php) | PHP | 15 | 6 | 4 | 25 |
| [app/Http/Middleware/AuthAdministrator.php](/app/Http/Middleware/AuthAdministrator.php) | PHP | 17 | 5 | 5 | 27 |
| [app/Http/Middleware/Authenticate.php](/app/Http/Middleware/Authenticate.php) | PHP | 11 | 3 | 4 | 18 |
| [app/Http/Middleware/EncryptCookies.php](/app/Http/Middleware/EncryptCookies.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/PreventRequestsDuringMaintenance.php](/app/Http/Middleware/PreventRequestsDuringMaintenance.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/RedirectIfAuthenticated.php](/app/Http/Middleware/RedirectIfAuthenticated.php) | PHP | 20 | 5 | 6 | 31 |
| [app/Http/Middleware/TrimStrings.php](/app/Http/Middleware/TrimStrings.php) | PHP | 11 | 5 | 4 | 20 |
| [app/Http/Middleware/TrustHosts.php](/app/Http/Middleware/TrustHosts.php) | PHP | 12 | 5 | 4 | 21 |
| [app/Http/Middleware/TrustProxies.php](/app/Http/Middleware/TrustProxies.php) | PHP | 14 | 10 | 5 | 29 |
| [app/Http/Middleware/User.php](/app/Http/Middleware/User.php) | PHP | 17 | 5 | 4 | 26 |
| [app/Http/Middleware/ValidateSignature.php](/app/Http/Middleware/ValidateSignature.php) | PHP | 8 | 11 | 4 | 23 |
| [app/Http/Middleware/VerifyCsrfToken.php](/app/Http/Middleware/VerifyCsrfToken.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/guest.php](/app/Http/Middleware/guest.php) | PHP | 15 | 5 | 4 | 24 |
| [app/Models/Announcement.php](/app/Models/Announcement.php) | PHP | 18 | 0 | 5 | 23 |
| [app/Models/AssistantLecturer.php](/app/Models/AssistantLecturer.php) | PHP | 27 | 0 | 7 | 34 |
| [app/Models/Attendance.php](/app/Models/Attendance.php) | PHP | 21 | 0 | 7 | 28 |
| [app/Models/Field.php](/app/Models/Field.php) | PHP | 14 | 0 | 7 | 21 |
| [app/Models/Inventory.php](/app/Models/Inventory.php) | PHP | 20 | 0 | 5 | 25 |
| [app/Models/LabAdministrator.php](/app/Models/LabAdministrator.php) | PHP | 24 | 0 | 9 | 33 |
| [app/Models/LabReserve.php](/app/Models/LabReserve.php) | PHP | 20 | 0 | 7 | 27 |
| [app/Models/Laboratorium.php](/app/Models/Laboratorium.php) | PHP | 23 | 0 | 9 | 32 |
| [app/Models/LectureSchedule.php](/app/Models/LectureSchedule.php) | PHP | 34 | 0 | 11 | 45 |
| [app/Models/Project.php](/app/Models/Project.php) | PHP | 30 | 0 | 9 | 39 |
| [app/Models/ProjectField.php](/app/Models/ProjectField.php) | PHP | 22 | 0 | 5 | 27 |
| [app/Models/ProjectHistory.php](/app/Models/ProjectHistory.php) | PHP | 22 | 0 | 8 | 30 |
| [app/Models/Reserve.php](/app/Models/Reserve.php) | PHP | 26 | 0 | 6 | 32 |
| [app/Models/Software.php](/app/Models/Software.php) | PHP | 15 | 0 | 6 | 21 |
| [app/Models/SoftwareLab.php](/app/Models/SoftwareLab.php) | PHP | 19 | 0 | 8 | 27 |
| [app/Models/Subject.php](/app/Models/Subject.php) | PHP | 22 | 0 | 9 | 31 |
| [app/Models/User.php](/app/Models/User.php) | PHP | 43 | 16 | 10 | 69 |
| [app/Policies/AnnouncementPolicy.php](/app/Policies/AnnouncementPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/AssistantLecturerPolicy.php](/app/Policies/AssistantLecturerPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/AttendancePolicy.php](/app/Policies/AttendancePolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/FieldPolicy.php](/app/Policies/FieldPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/InventoryPolicy.php](/app/Policies/InventoryPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/LabAdministratorPolicy.php](/app/Policies/LabAdministratorPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/LabReservePolicy.php](/app/Policies/LabReservePolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/LaboratoriumPolicy.php](/app/Policies/LaboratoriumPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/LectureSchedulePolicy.php](/app/Policies/LectureSchedulePolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/ProjectFieldPolicy.php](/app/Policies/ProjectFieldPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/ProjectHistoryPolicy.php](/app/Policies/ProjectHistoryPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/ProjectPolicy.php](/app/Policies/ProjectPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/ReservePolicy.php](/app/Policies/ReservePolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/SoftwarePolicy.php](/app/Policies/SoftwarePolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/SubjectPolicy.php](/app/Policies/SubjectPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Policies/SubjectsPolicy.php](/app/Policies/SubjectsPolicy.php) | PHP | 29 | 28 | 10 | 67 |
| [app/Providers/AppServiceProvider.php](/app/Providers/AppServiceProvider.php) | PHP | 14 | 7 | 5 | 26 |
| [app/Providers/AuthServiceProvider.php](/app/Providers/AuthServiceProvider.php) | PHP | 11 | 11 | 5 | 27 |
| [app/Providers/BroadcastServiceProvider.php](/app/Providers/BroadcastServiceProvider.php) | PHP | 12 | 3 | 5 | 20 |
| [app/Providers/EventServiceProvider.php](/app/Providers/EventServiceProvider.php) | PHP | 21 | 12 | 6 | 39 |
| [app/Providers/RouteServiceProvider.php](/app/Providers/RouteServiceProvider.php) | PHP | 24 | 10 | 7 | 41 |
| [bootstrap/app.php](/bootstrap/app.php) | PHP | 17 | 30 | 9 | 56 |
| [composer.json](/composer.json) | JSON | 67 | 0 | 1 | 68 |
| [composer.lock](/composer.lock) | JSON | 8,236 | 0 | 1 | 8,237 |
| [config/app.php](/config/app.php) | PHP | 27 | 131 | 31 | 189 |
| [config/auth.php](/config/auth.php) | PHP | 36 | 74 | 14 | 124 |
| [config/broadcasting.php](/config/broadcasting.php) | PHP | 36 | 23 | 13 | 72 |
| [config/cache.php](/config/cache.php) | PHP | 59 | 34 | 19 | 112 |
| [config/cors.php](/config/cors.php) | PHP | 3 | 29 | 3 | 35 |
| [config/database.php](/config/database.php) | PHP | 83 | 47 | 22 | 152 |
| [config/filesystems.php](/config/filesystems.php) | PHP | 32 | 32 | 13 | 77 |
| [config/hashing.php](/config/hashing.php) | PHP | 12 | 32 | 9 | 53 |
| [config/logging.php](/config/logging.php) | PHP | 79 | 34 | 19 | 132 |
| [config/mail.php](/config/mail.php) | PHP | 54 | 53 | 19 | 126 |
| [config/queue.php](/config/queue.php) | PHP | 51 | 42 | 17 | 110 |
| [config/sanctum.php](/config/sanctum.php) | PHP | 15 | 41 | 12 | 68 |
| [config/services.php](/config/services.php) | PHP | 17 | 11 | 7 | 35 |
| [config/session.php](/config/session.php) | PHP | 22 | 147 | 33 | 202 |
| [config/view.php](/config/view.php) | PHP | 10 | 20 | 7 | 37 |
| [database/factories/AnnouncementFactory.php](/database/factories/AnnouncementFactory.php) | PHP | 14 | 8 | 4 | 26 |
| [database/factories/AssistantLecturerFactory.php](/database/factories/AssistantLecturerFactory.php) | PHP | 11 | 8 | 5 | 24 |
| [database/factories/AttendanceFactory.php](/database/factories/AttendanceFactory.php) | PHP | 11 | 8 | 4 | 23 |
| [database/factories/FieldFactory.php](/database/factories/FieldFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/InventoryFactory.php](/database/factories/InventoryFactory.php) | PHP | 17 | 8 | 4 | 29 |
| [database/factories/LabAdministratorFactory.php](/database/factories/LabAdministratorFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/LabReserveFactory.php](/database/factories/LabReserveFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/LaboratoriumFactory.php](/database/factories/LaboratoriumFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/LectureScheduleFactory.php](/database/factories/LectureScheduleFactory.php) | PHP | 12 | 20 | 9 | 41 |
| [database/factories/ProjectFactory.php](/database/factories/ProjectFactory.php) | PHP | 19 | 8 | 4 | 31 |
| [database/factories/ProjectFieldFactory.php](/database/factories/ProjectFieldFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/ProjectHistoryFactory.php](/database/factories/ProjectHistoryFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/ReserveFactory.php](/database/factories/ReserveFactory.php) | PHP | 11 | 8 | 5 | 24 |
| [database/factories/SoftwareFactory.php](/database/factories/SoftwareFactory.php) | PHP | 13 | 8 | 4 | 25 |
| [database/factories/SoftwareLabFactory.php](/database/factories/SoftwareLabFactory.php) | PHP | 13 | 8 | 4 | 25 |
| [database/factories/SubjectFactory.php](/database/factories/SubjectFactory.php) | PHP | 11 | 9 | 4 | 24 |
| [database/factories/UserFactory.php](/database/factories/UserFactory.php) | PHP | 23 | 11 | 5 | 39 |
| [database/migrations/2014_10_12_000000_create_users_table.php](/database/migrations/2014_10_12_000000_create_users_table.php) | PHP | 24 | 6 | 4 | 34 |
| [database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php](/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php) | PHP | 19 | 6 | 4 | 29 |
| [database/migrations/2019_08_19_000000_create_failed_jobs_table.php](/database/migrations/2019_08_19_000000_create_failed_jobs_table.php) | PHP | 23 | 6 | 4 | 33 |
| [database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php](/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php) | PHP | 24 | 6 | 4 | 34 |
| [database/migrations/2023_09_20_110504_create_subjects_table.php](/database/migrations/2023_09_20_110504_create_subjects_table.php) | PHP | 20 | 6 | 5 | 31 |
| [database/migrations/2023_09_20_110739_create_laboratorium_table.php](/database/migrations/2023_09_20_110739_create_laboratorium_table.php) | PHP | 23 | 6 | 4 | 33 |
| [database/migrations/2023_09_20_110908_create_lab_administrators_table.php](/database/migrations/2023_09_20_110908_create_lab_administrators_table.php) | PHP | 26 | 6 | 4 | 36 |
| [database/migrations/2023_09_20_110942_create_lecture_schedules_table.php](/database/migrations/2023_09_20_110942_create_lecture_schedules_table.php) | PHP | 27 | 6 | 10 | 43 |
| [database/migrations/2023_09_20_111844_create_software_table.php](/database/migrations/2023_09_20_111844_create_software_table.php) | PHP | 20 | 6 | 4 | 30 |
| [database/migrations/2023_09_20_112004_create_software_lab_table.php](/database/migrations/2023_09_20_112004_create_software_lab_table.php) | PHP | 20 | 7 | 6 | 33 |
| [database/migrations/2023_09_20_112837_create_assistant_lecturers_table.php](/database/migrations/2023_09_20_112837_create_assistant_lecturers_table.php) | PHP | 23 | 6 | 7 | 36 |
| [database/migrations/2023_09_20_113847_create_attendances_table.php](/database/migrations/2023_09_20_113847_create_attendances_table.php) | PHP | 24 | 6 | 7 | 37 |
| [database/migrations/2023_09_20_114447_create_projects_table.php](/database/migrations/2023_09_20_114447_create_projects_table.php) | PHP | 26 | 6 | 6 | 38 |
| [database/migrations/2023_09_20_114623_create_project_histories_table.php](/database/migrations/2023_09_20_114623_create_project_histories_table.php) | PHP | 21 | 6 | 7 | 34 |
| [database/migrations/2023_09_20_115037_create_fields_table.php](/database/migrations/2023_09_20_115037_create_fields_table.php) | PHP | 19 | 6 | 4 | 29 |
| [database/migrations/2023_09_20_115123_create_project_fields_table.php](/database/migrations/2023_09_20_115123_create_project_fields_table.php) | PHP | 21 | 6 | 6 | 33 |
| [database/migrations/2023_10_08_170618_create_announcements_table.php](/database/migrations/2023_10_08_170618_create_announcements_table.php) | PHP | 22 | 6 | 6 | 34 |
| [database/migrations/2023_10_08_171126_create_reserves_table.php](/database/migrations/2023_10_08_171126_create_reserves_table.php) | PHP | 25 | 6 | 7 | 38 |
| [database/migrations/2023_10_08_171235_create_lab_reserves_table.php](/database/migrations/2023_10_08_171235_create_lab_reserves_table.php) | PHP | 23 | 6 | 10 | 39 |
| [database/migrations/2023_10_27_160507_create_inventories_table.php](/database/migrations/2023_10_27_160507_create_inventories_table.php) | PHP | 25 | 6 | 7 | 38 |
| [database/seeders/AnnouncementSeeder.php](/database/seeders/AnnouncementSeeder.php) | PHP | 12 | 3 | 4 | 19 |
| [database/seeders/AssistantLecturerSeeder.php](/database/seeders/AssistantLecturerSeeder.php) | PHP | 27 | 3 | 6 | 36 |
| [database/seeders/AttendanceSeeder.php](/database/seeders/AttendanceSeeder.php) | PHP | 24 | 3 | 5 | 32 |
| [database/seeders/DatabaseSeeder.php](/database/seeders/DatabaseSeeder.php) | PHP | 26 | 4 | 5 | 35 |
| [database/seeders/FieldSeeder.php](/database/seeders/FieldSeeder.php) | PHP | 40 | 3 | 5 | 48 |
| [database/seeders/InventorySeeder.php](/database/seeders/InventorySeeder.php) | PHP | 12 | 3 | 4 | 19 |
| [database/seeders/LabAdministratorSeeder.php](/database/seeders/LabAdministratorSeeder.php) | PHP | 34 | 3 | 6 | 43 |
| [database/seeders/LabReserveSeeder.php](/database/seeders/LabReserveSeeder.php) | PHP | 24 | 3 | 5 | 32 |
| [database/seeders/LaboratoriumSeeder.php](/database/seeders/LaboratoriumSeeder.php) | PHP | 61 | 3 | 5 | 69 |
| [database/seeders/LectureScheduleSeeder.php](/database/seeders/LectureScheduleSeeder.php) | PHP | 75 | 3 | 5 | 83 |
| [database/seeders/ProjectFieldSeeder.php](/database/seeders/ProjectFieldSeeder.php) | PHP | 36 | 3 | 5 | 44 |
| [database/seeders/ProjectHistorySeeder.php](/database/seeders/ProjectHistorySeeder.php) | PHP | 36 | 3 | 5 | 44 |
| [database/seeders/ProjectSeeder.php](/database/seeders/ProjectSeeder.php) | PHP | 12 | 3 | 4 | 19 |
| [database/seeders/ReserveSeeder.php](/database/seeders/ReserveSeeder.php) | PHP | 31 | 3 | 5 | 39 |
| [database/seeders/SoftwareLabSeeder.php](/database/seeders/SoftwareLabSeeder.php) | PHP | 12 | 3 | 4 | 19 |
| [database/seeders/SoftwareSeeder.php](/database/seeders/SoftwareSeeder.php) | PHP | 12 | 3 | 4 | 19 |
| [database/seeders/SubjectSeeder.php](/database/seeders/SubjectSeeder.php) | PHP | 36 | 3 | 5 | 44 |
| [database/seeders/UserSeeder.php](/database/seeders/UserSeeder.php) | PHP | 58 | 3 | 5 | 66 |
| [package-lock.json](/package-lock.json) | JSON | 1,766 | 0 | 1 | 1,767 |
| [package.json](/package.json) | JSON | 17 | 0 | 1 | 18 |
| [phpunit.xml](/phpunit.xml) | XML | 29 | 2 | 1 | 32 |
| [postcss.config.js](/postcss.config.js) | JavaScript | 6 | 0 | 1 | 7 |
| [public/assets/css/grid.css](/public/assets/css/grid.css) | PostCSS | 39 | 4 | 7 | 50 |
| [public/assets/css/navbar.css](/public/assets/css/navbar.css) | PostCSS | 0 | 0 | 1 | 1 |
| [public/assets/css/slider.css](/public/assets/css/slider.css) | PostCSS | 65 | 0 | 9 | 74 |
| [public/assets/css/style.css](/public/assets/css/style.css) | PostCSS | 25 | 3 | 5 | 33 |
| [public/assets/img/dashboard/layout/asisten.svg](/public/assets/img/dashboard/layout/asisten.svg) | XML | 3 | 0 | 1 | 4 |
| [public/assets/img/dashboard/layout/beranda.svg](/public/assets/img/dashboard/layout/beranda.svg) | XML | 6 | 0 | 1 | 7 |
| [public/assets/img/dashboard/layout/inventaris.svg](/public/assets/img/dashboard/layout/inventaris.svg) | XML | 10 | 0 | 1 | 11 |
| [public/assets/img/dashboard/layout/jadwal.svg](/public/assets/img/dashboard/layout/jadwal.svg) | XML | 4 | 0 | 1 | 5 |
| [public/assets/img/dashboard/layout/logout.svg](/public/assets/img/dashboard/layout/logout.svg) | XML | 4 | 0 | 1 | 5 |
| [public/assets/img/dashboard/layout/peminjaman.svg](/public/assets/img/dashboard/layout/peminjaman.svg) | XML | 3 | 0 | 1 | 4 |
| [public/assets/img/dashboard/layout/profile.svg](/public/assets/img/dashboard/layout/profile.svg) | XML | 3 | 0 | 1 | 4 |
| [public/assets/img/dashboard/layout/proyek.svg](/public/assets/img/dashboard/layout/proyek.svg) | XML | 3 | 0 | 1 | 4 |
| [public/assets/img/page/about/penguin.svg](/public/assets/img/page/about/penguin.svg) | XML | 34 | 1 | 0 | 35 |
| [public/assets/js/notif.js](/public/assets/js/notif.js) | JavaScript | 6 | 1 | 0 | 7 |
| [public/index.php](/public/index.php) | PHP | 14 | 30 | 12 | 56 |
| [resources/css/app.css](/resources/css/app.css) | PostCSS | 16 | 3 | 5 | 24 |
| [resources/js/app.js](/resources/js/app.js) | JavaScript | 3 | 0 | 3 | 6 |
| [resources/js/bootstrap.js](/resources/js/bootstrap.js) | JavaScript | 3 | 23 | 7 | 33 |
| [resources/views/dashboard/announcement/create.blade.php](/resources/views/dashboard/announcement/create.blade.php) | PHP | 23 | 0 | 3 | 26 |
| [resources/views/dashboard/announcement/index.blade.php](/resources/views/dashboard/announcement/index.blade.php) | PHP | 69 | 0 | 20 | 89 |
| [resources/views/dashboard/announcement/show.blade.php](/resources/views/dashboard/announcement/show.blade.php) | PHP | 37 | 0 | 8 | 45 |
| [resources/views/dashboard/assistant/attendance.blade.php](/resources/views/dashboard/assistant/attendance.blade.php) | PHP | 91 | 0 | 5 | 96 |
| [resources/views/dashboard/assistant/create.blade.php](/resources/views/dashboard/assistant/create.blade.php) | PHP | 44 | 0 | 1 | 45 |
| [resources/views/dashboard/assistant/edit.blade.php](/resources/views/dashboard/assistant/edit.blade.php) | PHP | 48 | 0 | 2 | 50 |
| [resources/views/dashboard/assistant/history.blade.php](/resources/views/dashboard/assistant/history.blade.php) | PHP | 60 | 0 | 1 | 61 |
| [resources/views/dashboard/assistant/historyLaboran.blade.php](/resources/views/dashboard/assistant/historyLaboran.blade.php) | PHP | 6 | 0 | 2 | 8 |
| [resources/views/dashboard/assistant/index.blade.php](/resources/views/dashboard/assistant/index.blade.php) | PHP | 97 | 0 | 3 | 100 |
| [resources/views/dashboard/assistant/presence.blade.php](/resources/views/dashboard/assistant/presence.blade.php) | PHP | 18 | 0 | 1 | 19 |
| [resources/views/dashboard/assistant/scan.blade.php](/resources/views/dashboard/assistant/scan.blade.php) | PHP | 13 | 0 | 1 | 14 |
| [resources/views/dashboard/assistant/show.blade.php](/resources/views/dashboard/assistant/show.blade.php) | PHP | 109 | 0 | 1 | 110 |
| [resources/views/dashboard/components/dashboard.blade.php](/resources/views/dashboard/components/dashboard.blade.php) | PHP | 170 | 0 | 4 | 174 |
| [resources/views/dashboard/components/header.blade.php](/resources/views/dashboard/components/header.blade.php) | PHP | 3 | 0 | 0 | 3 |
| [resources/views/dashboard/components/paginate.blade.php](/resources/views/dashboard/components/paginate.blade.php) | PHP | 65 | 3 | 11 | 79 |
| [resources/views/dashboard/index.blade.php](/resources/views/dashboard/index.blade.php) | PHP | 99 | 0 | 5 | 104 |
| [resources/views/dashboard/inventory/create.blade.php](/resources/views/dashboard/inventory/create.blade.php) | PHP | 52 | 0 | 4 | 56 |
| [resources/views/dashboard/inventory/edit.blade.php](/resources/views/dashboard/inventory/edit.blade.php) | PHP | 53 | 0 | 4 | 57 |
| [resources/views/dashboard/inventory/index.blade.php](/resources/views/dashboard/inventory/index.blade.php) | PHP | 22 | 0 | 1 | 23 |
| [resources/views/dashboard/inventory/show.blade.php](/resources/views/dashboard/inventory/show.blade.php) | PHP | 133 | 0 | 2 | 135 |
| [resources/views/dashboard/layouts/main.blade.php](/resources/views/dashboard/layouts/main.blade.php) | PHP | 18 | 0 | 2 | 20 |
| [resources/views/dashboard/project/create.blade.php](/resources/views/dashboard/project/create.blade.php) | PHP | 100 | 0 | 8 | 108 |
| [resources/views/dashboard/project/edit.blade.php](/resources/views/dashboard/project/edit.blade.php) | PHP | 103 | 0 | 9 | 112 |
| [resources/views/dashboard/project/index.blade.php](/resources/views/dashboard/project/index.blade.php) | PHP | 115 | 0 | 2 | 117 |
| [resources/views/dashboard/project/show.blade.php](/resources/views/dashboard/project/show.blade.php) | PHP | 69 | 0 | 3 | 72 |
| [resources/views/dashboard/reserve/create.blade.php](/resources/views/dashboard/reserve/create.blade.php) | PHP | 236 | 8 | 31 | 275 |
| [resources/views/dashboard/reserve/index.blade.php](/resources/views/dashboard/reserve/index.blade.php) | PHP | 103 | 0 | 1 | 104 |
| [resources/views/dashboard/reserve/show.blade.php](/resources/views/dashboard/reserve/show.blade.php) | PHP | 38 | 0 | 3 | 41 |
| [resources/views/dashboard/schedule/create.blade.php](/resources/views/dashboard/schedule/create.blade.php) | PHP | 98 | 2 | 17 | 117 |
| [resources/views/dashboard/schedule/edit.blade.php](/resources/views/dashboard/schedule/edit.blade.php) | PHP | 71 | 0 | 4 | 75 |
| [resources/views/dashboard/schedule/index.blade.php](/resources/views/dashboard/schedule/index.blade.php) | PHP | 178 | 1 | 15 | 194 |
| [resources/views/dashboard/schedule/show.blade.php](/resources/views/dashboard/schedule/show.blade.php) | PHP | 88 | 0 | 5 | 93 |
| [resources/views/dashboard/user/edit.blade.php](/resources/views/dashboard/user/edit.blade.php) | PHP | 67 | 0 | 8 | 75 |
| [resources/views/dashboard/user/index.blade.php](/resources/views/dashboard/user/index.blade.php) | PHP | 56 | 0 | 1 | 57 |
| [resources/views/errors/404.blade.php](/resources/views/errors/404.blade.php) | PHP | 31 | 0 | 0 | 31 |
| [resources/views/page/about.blade.php](/resources/views/page/about.blade.php) | PHP | 247 | 11 | 19 | 277 |
| [resources/views/page/auth/login.blade.php](/resources/views/page/auth/login.blade.php) | PHP | 79 | 0 | 16 | 95 |
| [resources/views/page/components/footer.blade.php](/resources/views/page/components/footer.blade.php) | PHP | 48 | 0 | 1 | 49 |
| [resources/views/page/components/navbar.blade.php](/resources/views/page/components/navbar.blade.php) | PHP | 139 | 5 | 4 | 148 |
| [resources/views/page/datasoftware.blade.php](/resources/views/page/datasoftware.blade.php) | PHP | 231 | 7 | 37 | 275 |
| [resources/views/page/index.blade.php](/resources/views/page/index.blade.php) | PHP | 382 | 1 | 82 | 465 |
| [resources/views/page/laboratorium/index.blade.php](/resources/views/page/laboratorium/index.blade.php) | PHP | 373 | 7 | 49 | 429 |
| [resources/views/page/laboratorium/show.blade.php](/resources/views/page/laboratorium/show.blade.php) | PHP | 101 | 3 | 15 | 119 |
| [resources/views/page/layouts/main.blade.php](/resources/views/page/layouts/main.blade.php) | PHP | 98 | 0 | 27 | 125 |
| [resources/views/page/membership/index.blade.php](/resources/views/page/membership/index.blade.php) | PHP | 86 | 0 | 35 | 121 |
| [resources/views/page/membership/show.blade.php](/resources/views/page/membership/show.blade.php) | PHP | 76 | 0 | 19 | 95 |
| [resources/views/page/publication/category.blade.php](/resources/views/page/publication/category.blade.php) | PHP | 120 | 0 | 35 | 155 |
| [resources/views/page/publication/index.blade.php](/resources/views/page/publication/index.blade.php) | PHP | 87 | 1 | 15 | 103 |
| [resources/views/page/publication/publication.blade.php](/resources/views/page/publication/publication.blade.php) | PHP | 119 | 7 | 28 | 154 |
| [resources/views/page/publication/show.blade.php](/resources/views/page/publication/show.blade.php) | PHP | 126 | 0 | 10 | 136 |
| [routes/api.php](/routes/api.php) | PHP | 6 | 10 | 4 | 20 |
| [routes/channels.php](/routes/channels.php) | PHP | 5 | 10 | 4 | 19 |
| [routes/console.php](/routes/console.php) | PHP | 6 | 10 | 4 | 20 |
| [routes/web.php](/routes/web.php) | PHP | 90 | 26 | 29 | 145 |
| [tailwind.config.js](/tailwind.config.js) | JavaScript | 23 | 1 | 3 | 27 |
| [tests/CreatesApplication.php](/tests/CreatesApplication.php) | PHP | 13 | 3 | 6 | 22 |
| [tests/Feature/ExampleTest.php](/tests/Feature/ExampleTest.php) | PHP | 11 | 4 | 5 | 20 |
| [tests/TestCase.php](/tests/TestCase.php) | PHP | 7 | 0 | 4 | 11 |
| [tests/Unit/ExampleTest.php](/tests/Unit/ExampleTest.php) | PHP | 10 | 3 | 4 | 17 |
| [vendor/spatie/ignition/resources/compiled/ignition.css](/vendor/spatie/ignition/resources/compiled/ignition.css) | PostCSS | 1 | 2 | 0 | 3 |
| [vendor/spatie/ignition/resources/compiled/ignition.js](/vendor/spatie/ignition/resources/compiled/ignition.js) | JavaScript | 6 | 0 | 1 | 7 |
| [vite.config.js](/vite.config.js) | JavaScript | 10 | 0 | 2 | 12 |

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)