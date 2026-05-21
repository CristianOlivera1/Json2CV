# CodeOner - Professional CV Generator & Authentication Platform 🚀

![CodeOner Demo](https://github.com/CristianOlivera1/Resources-dev/raw/main/any/demo-codeoner.gif)

## Description
CodeOner is a complete web platform that combines a powerful **professional CV generator** with an **advanced authentication system**. Users can create professional resumes using templates such as Harvard and Modern Chronological, manage their profiles, and access the platform through social authentication providers.

## Main Features

### Advanced CV Generator
- **Multiple Templates**: Harvard Professional, Modern Chronological (Platinum Standard), and customizable templates
- **Real-Time JSON Editor**: Instant editing with live preview
- **PDF Export**: Generate professional PDFs (desktop only)
- **Responsive Design**: Optimized for all devices
- **Auto Save**: Automatically saves every 2 seconds

### Authentication System
- **Social Authentication**: Google, GitHub, Facebook
- **Traditional Login/Register**: Username and password authentication
- **Session Management**: Secure session handling
- **OAuth 2.0**: Full OAuth implementation

### Profile Management
- **Customizable Profiles**: Avatar, personal information, biography
- **Public CVs**: Public shareable CV links
- **Visibility Control**: Public/private CV management
- **Data Management**: Full CRUD for personal information

### Modern Interface
- **SPA (Single Page Application)**: Smooth navigation without page reloads
- **Dark Theme**: Modern dark interface
- **Animations**: Smooth transitions and micro-interactions
- **Mobile-First**: Fully responsive design

![CodeOner Preview](https://github.com/CristianOlivera1/Resources-dev/raw/main/any/preview-codeoner.png)

---

## Live Demo

### CV Generator
[![TRY_GENERATOR](https://img.shields.io/badge/TRY_GENERATOR-FF6B35?style=for-the-badge&logo=adobe-acrobat-reader&logoColor=white)](https://codeoner.rf.gd/generate-cv)

### Example Generated CV
[![VIEW_SAMPLE_CV](https://img.shields.io/badge/VIEW_SAMPLE_CV-4CAF50?style=for-the-badge&logo=readthedocs&logoColor=white)](https://codeoner.rf.gd/cv/cristian-olivera-chavez)

---

## Technologies

### Backend
[![PHP](https://img.shields.io/badge/PHP_8.2-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Composer](https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=white)](https://getcomposer.org/)

### Frontend
[![JavaScript](https://img.shields.io/badge/JavaScript_ES6+-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)

### APIs & Services
[![Google OAuth](https://img.shields.io/badge/Google_OAuth-4285F4?logo=google&logoColor=white)](https://developers.google.com/identity)
[![GitHub OAuth](https://img.shields.io/badge/GitHub_OAuth-181717?logo=github&logoColor=white)](https://docs.github.com/en/developers/apps)
[![Facebook OAuth](https://img.shields.io/badge/Facebook_OAuth-1877F2?logo=facebook&logoColor=white)](https://developers.facebook.com/)

---

## Installation

### Prerequisites
- **PHP 8.2+**
- **MySQL 8.0+**
- **Composer**
- **Web Server** (Apache/Nginx)

### Installation Steps

#### 1. Clone the repository
```bash
git clone https://github.com/CristianOlivera1/Login-Register-with-Autentication.git
cd Login-Register-with-Autentication
```

#### 2. Install dependencies
```bash
composer install
npm install
```

#### 3. Configure environment variables
```bash
cp .env.example .env
```

#### 4. Edit the `.env` file
```env
# Database Configuration
DB_HOST=localhost
DB_USERNAME=root
DB_PASSWORD=your_password
DB_NAME=codeoner

# OAuth Configuration
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GITHUB_CLIENT_ID=your-github-client-id
GITHUB_CLIENT_SECRET=your-github-client-secret
FACEBOOK_CLIENT_ID=your-facebook-client-id
FACEBOOK_CLIENT_SECRET=your-facebook-client-secret

# Application Configuration
APP_URL=http://localhost:3000
REDIRECT_URL_BASE=http://localhost:3000
```

#### 5. Set up the database
```sql
CREATE DATABASE codeoner;
-- Import schema from database/schema.sql
```

#### 6. Run the project
```bash
# Start the development server on port 3000
php -S localhost:3000 -t public public/router.php

# Compile and watch CSS changes to generate the final 'style.css' file
npx tailwindcss -i ./public/assets/css/input.css -o ./public/assets/css/style.css --watch
```

---

## OAuth Configuration

### Google OAuth
1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project
3. Enable the Google+ API
4. Create OAuth 2.0 credentials
5. Redirect URI:
```txt
http://localhost:3000/auth/callback/google
```

### GitHub OAuth
1. Go to [GitHub Developer Settings](https://github.com/settings/developers)
2. Create a new OAuth App
3. Homepage URL:
```txt
http://localhost:3000
```
4. Authorization callback URL:
```txt
http://localhost:3000/auth/callback/github
```

### Facebook OAuth
1. Go to [Facebook for Developers](https://developers.facebook.com/)
2. Create a new app
3. Add Facebook Login
4. Valid OAuth Redirect URI:
```txt
http://localhost:3000/auth/callback/facebook
```

---

## 🚀 Highlights
- Professional CV generation with real-time editing
- Public CV sharing system
- Modern responsive UI
- Full authentication ecosystem
- OAuth integrations
- Fast SPA experience
- Auto-save functionality
- Production-ready architecture
