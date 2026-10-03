# Digital Mitron Rebuild

A PHP/HTML5/CSS/Vanilla JavaScript rebuild starter for Digital Mitron.

## Run locally

From this folder:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000`.

## Structure

- `includes/header.php` — shared header/navigation
- `includes/footer.php` — shared CTA/footer
- `includes/service-data.php` — reusable service copy/data
- `includes/service-page.php` — common service page template
- `services/*.php` — individual service URLs
- `assets/css/style.css` — complete responsive UI system
- `assets/js/main.js` — navigation, reveal animation, problem finder and service visuals
- `contact.php` — validated PHP contact form shell

## Production notes

- Connect `contact.php` to SMTP/PHPMailer or a CRM endpoint before launch.
- Replace concept project placeholders with real client work only when you have permission to publish it.
- Add production analytics, cookie consent, sitemap.xml, robots.txt and 301 redirects from old `.php` URLs.
- Configure canonical URLs and social metadata for the final domain.
