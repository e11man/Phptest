# Josh Ellman - Portfolio Website

A professional portfolio website showcasing Josh Ellman's full-stack development services and business solutions. Built with PHP 7.x and jQuery 3.x, designed for compatibility with both shared hosting and serverless platforms like Vercel.

## Features

- **Professional Portfolio**: Showcase of Josh Ellman's development expertise
- **Modern Dark UI**: Clean, professional design with purple accent colors
- **Responsive Design**: Fully optimized for mobile and desktop devices
- **Interactive Elements**: Advanced contact form, mobile menu, and smooth scrolling
- **Client-Ready**: Perfect for showing potential clients
- **PHP 7.x Compatible**: Works on shared hosting and traditional servers
- **jQuery 3.x**: Clean, efficient JavaScript functionality
- **Modular Structure**: Easy to customize and extend

## Quick Start

### For Shared Hosting
1. Upload all files to your web server's root directory
2. Ensure PHP 7.x is available on your server
3. Visit your domain in a web browser

### For Local Development
1. Clone or download this repository
2. Navigate to the project directory
3. Run: `php -S localhost:8000 -t .`
4. Open `http://localhost:8000` in your browser

### For Vercel Deployment
1. Push to GitHub repository
2. Connect to Vercel
3. Deploy with default settings

## File Structure

```
/
├── index.php           # Main homepage file
├── assets/
│   ├── css/
│   │   └── global.css  # All styles and design variables
│   ├── js/
│   │   └── global.js   # Interactive functionality
│   ├── components/     # Reusable UI components (future use)
│   └── images/         # Static images (future use)
└── README.md           # This file
```

## Customization

### Changing Colors & Fonts
Edit the CSS variables in `assets/css/global.css`:
```css
:root {
    --primary-bg: #0a0a0b;     /* Main background color */
    --accent-color: #00d4ff;   /* Accent/button color */
    --text-primary: #ffffff;   /* Main text color */
    /* ... other variables ... */
}
```

### Adding New Sections
1. Add HTML content to `index.php`
2. Add corresponding styles to `assets/css/global.css`
3. Add any interactive features to `assets/js/global.js`

## Browser Support

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Requirements

- PHP 7.x or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser with JavaScript enabled

## Project Brief Form

The advanced project brief form includes:
- Client-side validation for all fields
- Project type and budget selection
- PHP form processing with security
- Professional modal popup interface
- Success/error messaging
- 24-hour response commitment

## Technologies Used

- **Backend**: PHP 7.x
- **Frontend**: HTML5, CSS3, jQuery 3.x
- **Icons**: Font Awesome 6.x
- **Fonts**: System fonts for optimal performance

## License

This project is created as an exact replica for educational/demonstration purposes.