# Laravel Simple API

## Setup

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Copy `.env.example` to `.env` and configure your database settings.
4. Run `php artisan migrate` to create the necessary tables.

## Testing the API

To test the API, you can use tools like Postman or CURL to send a POST request to `/api/submit` with the following JSON payload:

```json
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
```
Run queue worker to save data to the database:

`php artisan queue:work`
