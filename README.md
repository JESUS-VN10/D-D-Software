# 🛒 D&D Software

**D&D Software** es una tienda virtual de ropa y calzado desarrollada en **Laravel**, diseñada para ofrecer simplicidad y rendimiento.

---

## 🚀 Características

- 🧢 Catálogo de ropa y calzado.
- 🛒 Carrito de compras funcional.
- 👤 Registro e inicio de sesión.
- 🧑‍💼 Panel administrativo (básico).
- 📦 Backend en PHP sin frameworks.
- 🐳 Despliegue con Docker y Docker Compose.

---

## 🐳 Stack Tecnológico

- **Laravel + Vue** como framework y framework de front-end
- **MySQL** como base de datos
- **XAMPP** como entorno de desarrollo

---

## ⚙️ Requisitos

Antes de comenzar, asegúrate de tener instalados:

- [Composer](https://getcomposer.org/download/)
- [PHP](https://www.php.net/downloads.php)

---

## 📦 Instalación con Composer

1. Clona este repositorio:

    ```bash
    git clone https://github.com/JESUS-VN10/D-D-Software.git
    cd D-D-Software
    ```

2. Instala las dependencias:

    ```bash
    composer install
    npm install
    npm run build
    ```

3. Migra la base de datos:

    ```bash
    php artisan migrate                  # Migra la base de datos
    ```

4. Inicializa el servidor:

    ```bash
    composer run dev                     # Inicia el servidor de desarrollo (Tanto el de Laraval como el de Vite)
    ```

5. Accede desde tu navegador:
    - Sitio web: [http://localhost:8000](http://localhost:8000)

---

    Comandos útiles para correr el proyecto con Composer:

    ```bash
    php artisan migrate                  # Migra la base de datos
    php artisan db:seed                  # Inicializa la base de datos
    php artisan key:generate             # Genera claves de cifrado
    php artisan storage:link             # Vincula la carpeta de archivos
    php artisan route:cache              # Actualiza la caché de rutas
    ```

---

## 🧪 En desarrollo...

- [ ] Buscador de productos
- [ ] Filtros por categoría y precio
- [ ] Subida de múltiples imágenes por producto
- [ ] Panel de administración mejorado

---

## 📄 Licencia

Este proyecto está licenciado bajo la **MIT License**.  
Consulta el archivo `LICENSE` para más información.

---

## 👨‍💻 Autor

Desarrollado con 💻 y 🎧 por **Jesús y Daniel**

GitHub: [@JESUS-VN10](https://github.com/JESUS-VN10)
GitHub: [@DanielEspitia1507](https://github.com/DanielEspitia1507)

---

⭐ ¡Gracias por visitar D&D Software! Si te gustó el proyecto, no olvides dejar una estrella al repo 😉
