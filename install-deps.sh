#!/bin/bash

# Crear carpetas si no existen
mkdir -p assets/css assets/js assets/webfonts

# Descargar Bootstrap CSS y JS
curl -L -o assets/css/bootstrap.min.css https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
curl -L -o assets/js/bootstrap.bundle.min.js https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js

# Descargar jQuery y jQuery Migrate
curl -L -o assets/js/jquery-1.11.0.min.js https://code.jquery.com/jquery-1.11.0.min.js
curl -L -o assets/js/jquery-migrate-1.2.1.min.js https://code.jquery.com/jquery-migrate-1.2.1.min.js

# Descargar FontAwesome CSS
echo "→ Descargando FontAwesome..."
curl -L -o assets/css/fontawesome.css https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css
curl -L -o assets/css/fontawesome.min.css https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css

# Descargar webfonts de FontAwesome
curl -L -o assets/webfonts/fa-solid-900.woff2 https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-solid-900.woff2
curl -L -o assets/webfonts/fa-regular-400.woff2 https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-regular-400.woff2
curl -L -o assets/webfonts/fa-brands-400.woff2 https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-brands-400.woff2

echo "Dependencias descargadas correctamente."
