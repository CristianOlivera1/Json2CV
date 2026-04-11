# CodeOner - Generador de CV Profesional y Plataforma de Autenticación 🚀

![CodeOner Demo](https://github.com/CristianOlivera1/Resources-dev/raw/main/any/demo-codeoner.gif)

## 🎯 Descripción
CodeOner es una plataforma web completa que combina un potente **generador de CV profesional** con un **sistema de autenticación avanzado**. Los usuarios pueden crear CVs con plantillas profesionales como Harvard y Modern Chronological, gestionar sus perfiles y acceder mediante autenticación social.

## ✨ Características Principales

### 📄 Generador de CV Avanzado
- **Múltiples Plantillas**: Harvard Professional, Modern Chronological (Platinum Standard), y plantillas personalizables
- **Editor JSON en Tiempo Real**: Edición inmediata con vista previa instantánea
- **Export PDF**: Generación de PDFs profesionales (solo desktop)
- **Responsive Design**: Optimizado para todos los dispositivos
- **Auto-guardado**: Guardado automático cada 2 segundos

### 🔐 Sistema de Autenticación
- **Autenticación Social**: Google, GitHub, Facebook
- **Registro/Login Tradicional**: Usuario y contraseña
- **Gestión de Sesiones**: Sistema de sesiones seguro
- **OAuth 2.0**: Implementación completa de OAuth

### 👤 Gestión de Perfiles
- **Perfiles Personalizables**: Avatar, información personal, biografía
- **CVs Públicos**: Enlaces públicos para compartir CVs
- **Control de Visibilidad**: CVs privados/públicos
- **Gestión de Datos**: CRUD completo de información personal

### 🎨 Interfaz Moderna
- **SPA (Single Page Application)**: Navegación fluida sin recargas
- **Dark Theme**: Interfaz oscura moderna
- **Animaciones**: Transiciones suaves y micro-interacciones
- **Mobile-First**: Diseño completamente responsive

![CodeOner Preview](https://github.com/CristianOlivera1/Resources-dev/raw/main/any/preview-codeoner.png)

## 🛠️ Tecnologías

### Backend
[![PHP](https://img.shields.io/badge/PHP_8.2-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Composer](https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=white)](https://getcomposer.org/)

### Frontend
[![JavaScript](https://img.shields.io/badge/JavaScript_ES6+-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)

### APIs y Servicios
[![Google OAuth](https://img.shields.io/badge/Google_OAuth-4285F4?logo=google&logoColor=white)](https://developers.google.com/identity)
[![GitHub OAuth](https://img.shields.io/badge/GitHub_OAuth-181717?logo=github&logoColor=white)](https://docs.github.com/en/developers/apps)
[![Facebook OAuth](https://img.shields.io/badge/Facebook_OAuth-1877F2?logo=facebook&logoColor=white)](https://developers.facebook.com/)

## 📦 Instalación

### Prerrequisitos
- **PHP 8.2+**
- **MySQL 8.0+**
- **Composer**
- **Servidor Web** (Apache/Nginx)

### Pasos de Instalación

1. **Clona el repositorio**
```bash
git clone https://github.com/CristianOlivera1/Login-Register-with-Autentication.git
cd Login-Register-with-Autentication
```

2. **Instala dependencias**
```bash
composer install
npm install
```

3. **Configura variables de entorno**
```bash
cp .env.example .env
```

4. **Edita el archivo `.env`**
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

5. **Configura la base de datos**
```sql
CREATE DATABASE codeoner;
-- Importar schema desde database/schema.sql
```

6. **Ejecución del Proyecto**
```bash
# Inicia el servidor de desarrollo en el puerto 3000
php -S localhost:3000 -t public public/router.php
# Compila y vigila cambios en CSS para generar el archivo final 'style.css'
npx tailwindcss -i ./public/assets/css/input.css -o ./public/assets/css/style.css --watch
```

## ⚙️ Configuración OAuth

### Google OAuth
1. Ve a [Google Cloud Console](https://console.cloud.google.com/)
2. Crea un proyecto nuevo
3. Habilita Google+ API
4. Crea credenciales OAuth 2.0
5. URI de redirección: `http://localhost:3000/auth/callback/google`

### GitHub OAuth
1. Ve a [GitHub Developer Settings](https://github.com/settings/developers)
2. Crea una nueva OAuth App
3. Homepage URL: `http://localhost:3000`
4. Authorization callback URL: `http://localhost:3000/auth/callback/github`

### Facebook OAuth
1. Ve a [Facebook for Developers](https://developers.facebook.com/)
2. Crea una nueva app
3. Agrega Facebook Login
4. Valid OAuth Redirect URI: `http://localhost:3000/auth/callback/facebook`

## 🌐 Demo en Vivo

**Sitio Web**: [![Ver Demo](https://img.shields.io/badge/DEMO_EN_VIVO-00e1ff?style=for-the-badge&logo=googlechrome&logoColor=black)](https://codeoner.rf.gd/)

**Generador de CV**: [![Probar Generador](https://img.shields.io/badge/PROBAR_GENERADOR-FF6B35?style=for-the-badge&logo=adobe-acrobat-reader&logoColor=white)](https://codeoner.rf.gd/generate-cv)
