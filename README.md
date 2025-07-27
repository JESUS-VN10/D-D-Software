
# 🛒 D&D Software

**D&D Software** es una tienda virtual de ropa y calzado desarrollada en **PHP puro**, diseñada para ofrecer simplicidad, velocidad y facilidad de despliegue. Está preparada para funcionar completamente con **Docker**, eliminando la necesidad de usar XAMPP u otros entornos locales complicados.

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

- **PHP** (puro)
- **MySQL** como base de datos
- **Apache** (dentro del contenedor)
- **Docker** + **Docker Compose**

---

## ⚙️ Requisitos

Antes de comenzar, asegúrate de tener instalados:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## 📦 Instalación con Docker

1. Clona este repositorio:

   ```bash
   git clone https://github.com/JESUS-VN10/D-D-Software.git
   cd D-D-Software
   ```

   Comandos útiles para correr el proyecto con Docker:

   ```bash
   docker compose down                   # Detiene y elimina los contenedores
   docker-compose up -d                 # Inicia los contenedores en segundo plano
   docker compose up -d --build         # Reconstruye la imagen y levanta contenedores
   docker-compose restart               # Reinicia los contenedores
   ```

2. Crea el archivo `.env` con las siguientes variables de entorno:

   ```env
   DB_HOST=db
   DB_NAME=
   DB_USER=root
   DB_PASSWORD=
   ```

3. Levanta los contenedores:

   ```bash
   docker-compose up -d
   ```

4. Accede desde tu navegador:

   - Sitio principal: [http://localhost:8000](http://localhost:8000)
   - phpMyAdmin (si está incluido): [http://localhost:8080](http://localhost:8080)

---

## 🗂️ Estructura del Proyecto

```
D-D-Software/
├── CSS/                # Estilos del frontend
├── JS/                 # Scripts de la tienda
├── IMG/                # Imágenes de productos e iconos
├── Config/             # Configuración y conexión a BD
├── *.php               # Páginas principales
├── Dockerfile
├── docker-compose.yml
├── .env                # Variables de entorno
├── .gitignore
└── README.md
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

---

⭐ ¡Gracias por visitar D&D Software! Si te gustó el proyecto, no olvides dejar una estrella al repo 😉
