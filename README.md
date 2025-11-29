## Setup Instructions

Run the following commands from the project root to set up the Laravel 12 application:

1. `composer install`
2. `npm install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Configure the database:
   - **SQLite**: set `DB_CONNECTION=sqlite` in `.env` and ensure `database/database.sqlite` exists.
   - **MySQL**: set `DB_CONNECTION=mysql` and update `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` in `.env`.
6. `php artisan migrate:fresh --seed`
7. `npm run dev`
8. `php artisan serve`

## Where to access the Dashboard page

- **URL**: `/dashboard`  
- The dashboard displays **only active items**.

## Notes

- **Factory states**: Item factories define `active` / `inactive` states to easily generate different item statuses.
- **Seeder data**: Database seeders generate example data for quick testing and verification.
- **Styling**: The UI is styled using **TailwindCSS** utility classes.
- **Query scopes**: An optional `activeLatest()` scope is provided to keep active-item filtering and ordering clean and reusable.
