# BladeTailwind Vite Theme

A WordPress starter theme using **BladePHP**, **TailwindCSS**, and **Vite.js**, designed for flexibility, performance, and clean development practices.

---

![Theme Screenshot](https://raw.githubusercontent.com/BlazL/BladeTailwind/refs/heads/main/resources/screenshot.png)

---

## Features

- **BladePHP Templating**: Clean and modular templates for enhanced readability and reusability.
- **TailwindCSS**: Utility-first CSS framework for building responsive, modern designs quickly.
- **Vite.js**: A fast build tool for modern JavaScript and CSS workflows with hot module replacement (HMR).
- **WordPress Integrations**: Hooks, widgets, and RSS feed support built-in.
- **Organized Folder Structure**: Well-structured theme files for easy customization and scalability.
- **Modern JavaScript**: Modular `main.js` entry point for JavaScript logic.

---

## Installation

### 1. Prerequisites

Ensure you have the following tools installed:

- **Node.js** (LTS recommended)
- **Composer** (PHP dependency manager)
- **npm** or **Yarn**

---

### 2. Clone the Repository

```bash
git clone https://github.com/blazl/BladeTailwind.git
cd bladetailwind
```

---

### 3. Install Dependencies

Install the PHP and Node.js dependencies:

```bash
composer install    # Install PHP dependencies
npm install         # Install JavaScript dependencies
# or
yarn install
```

---

### 4. Copy Theme to WordPress Directory

Copy the entire theme folder to your WordPress installation's `wp-content/themes` directory.

---

### 5. Activate the Theme

Log in to your WordPress admin dashboard and activate the **BladeTailwind Vite Theme** from the **Appearance > Themes** section.

---

### 6. Start Development

Run the Vite development server to enable hot module replacement (HMR):

```bash
npm run dev
# or
yarn dev
```

---

## Usage

### Blade Templates

BladePHP is used for templating. All templates are stored in the `resources/views` directory.

#### Example:
Create `resources/views/layout.blade.php`:

```blade
<!doctype html>
<html @php(language_attributes())>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(wp_head())
</head>
<body @php(body_class('font-sans antialiased'))>
  @php(wp_body_open())
  
  @include('partials.header')  <!-- Include header -->
  
  <main class="container mx-auto">
    @yield('content')          <!-- Yield content -->
  </main>

  @php(wp_footer())
</body>
</html>
```

---

## Scripts

| Command           | Description                               |
|-------------------|-------------------------------------------|
| `npm run dev`     | Start Vite dev server with HMR            |
| `npm run build`   | Compile assets for production             |

---

## Contributing

If you find a bug or have suggestions for improvement, feel free to submit an issue or pull request.

---

## License

This theme is open-sourced software licensed under the [MIT License](LICENSE).
