# multi_googleMap

A small Laravel application demonstrating integration of multiple Google Maps instances (autocomplete + maps) in a single project.

## Features

- Simple Google Maps + Places Autocomplete integration.
- Example view: `resources/views/googleAutocomplete.blade.php`.
- Laravel backend scaffolded for quick testing and extension.

## Prerequisites

- PHP 8.x
- Composer
- Node.js and npm
- A Google Maps JavaScript API key with Places API enabled

## Installation

1. Clone the repository and install PHP dependencies:

```bash
composer install
```

2. Install frontend dependencies and build assets:

```bash
npm install
npm run dev
```

3. Copy the environment file and generate an app key:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database settings in `.env` and run migrations (if needed):

```bash
php artisan migrate
```

## Configuration (Google Maps)

1. Add your API key to the `.env` file:

```env
GOOGLE_MAPS_API_KEY=YOUR_API_KEY_HERE
```

2. The example view `resources/views/googleAutocomplete.blade.php` loads the Google Maps script. If you need multiple maps on the same page, create additional containers and initialize each map with its own DOM element and configuration.

Tips for multiple maps:

- Use unique container IDs (e.g. `map1`, `map2`).
- Initialize each map with its own `google.maps.Map` instance.
- Share the same API key across instances; only one script include is required.

## Usage

1. Start the local development server:

```bash
php artisan serve
```

2. Open your browser at `http://127.0.0.1:8000` (or the address shown) and navigate to the route that renders `googleAutocomplete.blade.php`.

## Development notes

- The example autocomplete view uses Places Autocomplete to suggest locations and can be adapted to populate multiple maps.
- To add another map to a page, duplicate the container element and call the map initialization function with the new element's ID.

## Troubleshooting

- If maps do not load, check the browser console for Google Maps API errors (billing, key restrictions, or missing APIs).
- Ensure the Places API is enabled for your API key in Google Cloud Console.

## Next steps

- Add examples for multiple independent map controls (different center/zoom per map).
- Add tests for any backend logic that processes location data.

## License

This project follows the same license as Laravel (MIT). See the repository license for details.
