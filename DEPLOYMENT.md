# Vercel Deployment Guide

## Quick Deploy to Vercel

This project is now configured for Vercel deployment. Follow these steps:

### Option 1: Deploy via Vercel CLI
1. Install Vercel CLI: `npm i -g vercel`
2. Run: `vercel` in the project root
3. Follow the prompts to deploy

### Option 2: Deploy via GitHub
1. Push your code to GitHub
2. Go to [vercel.com](https://vercel.com)
3. Import your GitHub repository
4. Vercel will automatically detect the PHP configuration

### Option 3: Deploy via Vercel Dashboard
1. Go to [vercel.com](https://vercel.com)
2. Click "New Project"
3. Upload your project files
4. Vercel will use the `vercel.json` configuration

## Project Structure for Vercel

```
/
├── api/                    # Server-side PHP files (required for Vercel)
│   ├── index.php          # Main homepage
│   └── example-page.php   # Example page
├── assets/                # Static assets (CSS, JS, components)
│   ├── css/
│   ├── js/
│   └── components/
├── vercel.json           # Vercel configuration
└── README.md
```

## Important Notes

- All PHP files that need to be executed must be in the `api/` directory
- Static assets (CSS, JS, images) can remain in the root `assets/` directory
- The `vercel.json` file routes requests to the correct PHP files
- PHP files in the `api/` directory use `../` to reference assets outside the api folder

## URLs After Deployment

- Homepage: `https://your-domain.vercel.app/`
- Example Page: `https://your-domain.vercel.app/example-page`

## Troubleshooting

If you see PHP files downloading instead of executing:
1. Ensure all PHP files are in the `api/` directory
2. Check that `vercel.json` is in the project root
3. Verify the PHP runtime is specified in `vercel.json`
4. Make sure all file paths use `../` to reference assets outside the api folder