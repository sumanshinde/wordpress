# TechGrow Solutions - Premium IT Services WordPress Theme

A futuristic, high-end dark theme designed for IT services companies, agencies, and elite developer portfolios.

## ✨ Features
- **Premium Dark UI**: Black and navy blue palette with neon blue/green glow accents.
- **Futuristic Design**: Glassmorphism, smooth gradients, and elegant typography (Inter/Poppins).
- **Dynamic Content**: Manage Portfolio projects and company info directly from the WordPress dashboard.
- **AJAX Contact Form**: Secure form with database storage and admin viewing capability.
- **Fully Responsive**: Mobile-first architecture for all screen sizes.
- **Elementor Ready**: Includes a JSON template for easy Elementor integration.

## 📂 Project Structure
```text
techgrow-solutions/
├── js/
│   └── contact.js       # AJAX form handling logic
├── style.css            # Global styles and theme info
├── functions.php        # Backend logic, CPTs, and AJAX
├── header.php           # Premium glassmorphism navbar
├── footer.php           # Dynamic footer with social links
├── front-page.php       # Homepage sections
└── template-elementor.json # Elementor importable template
```

## 🚀 Setup Instructions

### 1. Local Development (Requires Docker)
1.  **Install Docker Desktop**: Download and install it from [docker.com](https://www.docker.com/).
2.  **Open Terminal**: Navigate to the project root (`e:\Wordpress`).
3.  **Run Containers**: Run `docker-compose up -d`.
4.  **Access Site**: Visit `http://localhost:8080`.
5.  **Admin Login**: Follow the WordPress setup, then log in at `http://localhost:8080/wp-admin`.

### 2. Instant Frontend Preview (No Setup Required)
If you don't have Docker installed, you can still view the high-end UI design:
1.  **Start Server**: Run `python -m http.server 8000` (already running).
2.  **View Design**: Visit **[http://localhost:8000/preview.html](http://localhost:8000/preview.html)**.

### 2. Manual Installation
1. Upload the `techgrow-solutions` folder to your WordPress `wp-content/themes/` directory.
2. Go to **Appearance > Themes** and activate it.
3. Configure your company info in **Appearance > Customize > TechGrow Info**.

## ☁️ Deployment on Render

### Option 1: Static Site (Fastest UI Demo)
Best for showing the premium UI and animations instantly.
1.  **GitHub**: Push this repository to GitHub.
2.  **Render**: Log in to Render and click **New > Static Site**.
3.  **Connect**: Connect your GitHub repository.
4.  **Settings**:
    - **Build Command**: (Leave blank)
    - **Publish Directory**: `.` (The root directory containing `index.html`)
5.  **Deploy**: Click **Create Static Site**. Your premium UI is now live!

### Option 2: Full WordPress Backend (Blueprint)
For the full functional WordPress experience.
1.  **GitHub**: Push the repository.
2.  **Render Blueprint**: Click **New > Blueprint**.
3.  **Connect**: Select this repository. Render will automatically detect `render.yaml`.
4.  **Resources**: Render will create a database (MariaDB) and a WordPress web service.
5.  **Note**: This option requires a **Starter Plan** or higher for persistent disk storage and database services.

## 📸 Screenshots
*(Add your screenshots here after deployment)*

## 🛠️ Tech Stack
- **Frontend**: HTML5, CSS3 (Grid/Flexbox), JavaScript (jQuery), AOS.js.
- **Backend**: PHP, WordPress Core, MySQL.
- **Design**: Figma-inspired futuristic UI.

---
**Crafted with precision by Trae AI.**
