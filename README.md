# 🗺️ Laravel Multi Google Maps

A Laravel demo project that demonstrates how to integrate **Google Maps** and display **multiple locations with markers** on a single map. This project is useful for applications such as store locators, branch locations, hospitals, schools, restaurants, and logistics tracking.

---

## 📌 Features

- 🗺️ Google Maps Integration
- 📍 Display Multiple Markers
- 📌 Dynamic Marker Loading from Database
- 🔍 Zoom and Pan Controls
- 📱 Responsive Map Design
- ⚡ Fast Marker Rendering
- 🗄️ MySQL Database Integration
- 🧩 Easy Configuration and Customization

---

## 🛠️ Tech Stack

- Laravel
- PHP 8.x
- MySQL
- Google Maps JavaScript API
- JavaScript
- Bootstrap / Tailwind CSS

---

## 📋 Requirements

Before you begin, make sure you have the following installed:

- PHP >= 8.2
- Composer
- MySQL
- Node.js (Optional)
- Git

---

# 🚀 Installation

## 1. Clone the Repository

```bash
git clone https://github.com/ronak4549/mutli_GoogleMaps.git
```

```bash
cd mutli_GoogleMaps
```

---

## 2. Install PHP Dependencies

```bash
composer install
```

---

## 3. Install Frontend Dependencies (Optional)

```bash
npm install
```

---

## 4. Create Environment File

Linux / Mac

```bash
cp .env.example .env
```

Windows

```bash
copy .env.example .env
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

## 6. Configure Database

Update your `.env` file with your database credentials.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=multi_google_maps
DB_USERNAME=root
DB_PASSWORD=
```

---

## 7. Configure Google Maps API Key

Open the `.env` file and add your Google Maps API key.

```env
GOOGLE_MAPS_API_KEY=YOUR_GOOGLE_MAPS_API_KEY
```

Example Blade file:

```html
<script
src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}">
</script>
```

---

## 8. Run Database Migration

```bash
php artisan migrate
```

---

## 9. Start Laravel Server

```bash
php artisan serve
```

Visit the application:

```
http://127.0.0.1:8000
```

---

# 📍 Project Functionality

This project demonstrates how to:

- Display multiple locations on Google Maps.
- Load latitude and longitude values from a MySQL database.
- Place multiple markers dynamically.
- Show location information using info windows.
- Zoom the map to fit all markers.
- Easily add or remove locations.

---

# 🗄️ Example Database Structure

| Column | Type |
|---------|------|
| id | bigint |
| name | varchar |
| latitude | decimal |
| longitude | decimal |
| created_at | timestamp |
| updated_at | timestamp |

---

# 📂 Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

# 🔧 Useful Artisan Commands

Generate Application Key

```bash
php artisan key:generate
```

Run Migration

```bash
php artisan migrate
```

Rollback Migration

```bash
php artisan migrate:rollback
```

Clear Cache

```bash
php artisan optimize:clear
```

Start Laravel Server

```bash
php artisan serve
```

---

# 📸 Screenshots

Add screenshots of your application here.

Example:

```
screenshots/

home.png
multiple-markers.png
info-window.png
```

```markdown
## Multiple Google Maps Markers

![Map](screenshots/multiple-markers.png)
```

---

# 📖 Example Workflow

1. Add location details to the database.
2. Retrieve latitude and longitude using Laravel.
3. Pass location data to the view.
4. Initialize Google Maps.
5. Loop through all locations.
6. Create a marker for each location.
7. Display information when clicking a marker.

---

# 🚀 Future Improvements

- Current User Location
- Marker Clustering
- Distance Calculation
- Route Navigation
- Place Search
- Geolocation
- Nearby Places Search
- Polygon and Circle Drawing
- Custom Marker Icons
- Heat Maps

---

# 🤝 Contributing

Contributions are welcome!

1. Fork the repository.

2. Create a new branch.

```bash
git checkout -b feature-name
```

3. Commit your changes.

```bash
git commit -m "Added new feature"
```

4. Push to GitHub.

```bash
git push origin feature-name
```

5. Open a Pull Request.

---

# 👨‍💻 Author

**Ronak Prajapati**

GitHub: https://github.com/ronak4549

---

# 📄 License

This project is licensed under the MIT License.
