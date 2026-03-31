# SendBulk Production Package

1. Upload files to hosting.
2. Import `database/dumps/sendbulk.sql`.
3. Set writable permissions for `storage/` and `bootstrap/cache/`.
4. Add cron: `* * * * * php /path/to/project/artisan schedule:run >/dev/null 2>&1`

## Default Super Admin
- Email: `admin@queue.liveblog365.com`
- Password: `Admin@12345`

`.env` is preconfigured for `https://queue.liveblog365.com` and provided MySQL credentials.
