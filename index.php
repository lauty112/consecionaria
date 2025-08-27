<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <title>AutoMax - Concesionaria Premium</title>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">AutoMax</div>
            <ul class="nav-links">
                <li><a href="./pages/loguin.php">Inicio Sesion</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#inventario">Inventario</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <h1>Tu Próximo Auto Te Está Esperando</h1>
            <p>Descubre nuestra amplia selección de vehículos premium con el mejor servicio y garantía</p>
            <a href="#inventario" class="cta-button">Ver Inventario</a>
        </div>
    </section>

    <!-- Servicios -->
    <section class="section" id="servicios">
        <h2>Nuestros Servicios</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🚗</div>
                <h3>Venta de Autos</h3>
                <p>Amplia selección de vehículos nuevos y usados de las mejores marcas del mercado</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💰</div>
                <h3>Financiamiento</h3>
                <p>Planes de financiamiento flexibles adaptados a tu presupuesto y necesidades</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Servicio Técnico</h3>
                <p>Mantenimiento y reparaciones con técnicos especializados y repuestos originales</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🛡️</div>
                <h3>Garantía Extendida</h3>
                <p>Protege tu inversión con nuestros planes de garantía extendida y seguros</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔄</div>
                <h3>Tomamos tu Usado</h3>
                <p>Evaluamos tu vehículo actual y lo tomamos como parte de pago</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3>Gestión de Papeles</h3>
                <p>Nos encargamos de todos los trámites y documentación legal</p>
            </div>
        </div>
    </section>

    <!-- Inventario -->
    <section class="section" id="inventario">
        <h2>Vehículos Destacados</h2>
        <div class="inventory-grid">
            <div class="car-card">
                <div class="car-image">🚙</div>
                <div class="car-info">
                    <h3>SUV Premium 2024</h3>
                    <div class="car-price">$45,000</div>
                    <ul class="car-features">
                        <li>• Motor 2.5L Turbo</li>
                        <li>• Tracción 4x4</li>
                        <li>• 7 Asientos</li>
                        <li>• Cámara 360°</li>
                    </ul>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">🏎️</div>
                <div class="car-info">
                    <h3>Deportivo Coupé 2023</h3>
                    <div class="car-price">$38,500</div>
                    <ul class="car-features">
                        <li>• Motor V6 3.0L</li>
                        <li>• 350 HP</li>
                        <li>• Transmisión Manual</li>
                        <li>• Kit Deportivo</li>
                    </ul>
                </div>
            </div>
            <div class="car-card">
                <div class="car-image">🚗</div>
                <div class="car-info">
                    <h3>Sedán Ejecutivo 2024</h3>
                    <div class="car-price">$32,000</div>
                    <ul class="car-features">
                        <li>• Motor Híbrido</li>
                        <li>• Consumo 4.5L/100km</li>
                        <li>• Cuero Premium</li>
                        <li>• Sistema Multimedia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <section class="section" id="nosotros">
        <h2>Sobre Nosotros</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Con más de 20 años de experiencia en el mercado automotriz, AutoMax se ha consolidado como una de las concesionarias más confiables de la región.</p>
                
                <p>Nuestro compromiso es brindar a nuestros clientes no solo vehículos de la más alta calidad, sino también un servicio excepcional que supere sus expectativas.</p>
                
                <p>Contamos con un equipo de profesionales altamente capacitados y una moderna instalación equipada con la última tecnología para ofrecer el mejor servicio integral.</p>
            </div>
            <div class="about-image">
                🏢 Nuestras Instalaciones
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section class="section" id="contacto">
        <h2>Contáctanos</h2>
        <div class="contact-content">
            <div class="contact-form">
                <h3>Envíanos un Mensaje</h3>
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Enviar Mensaje</button>
                </form>
            </div>
            <div class="contact-info">
                <div class="contact-item">
                    <h4>📍 Dirección</h4>
                    <p>Av. Principal 123<br>Ciudad, CP 12345</p>
                </div>
                <div class="contact-item">
                    <h4>📞 Teléfono</h4>
                    <p>+54 11 1234-5678</p>
                </div>
                <div class="contact-item">
                    <h4>📧 Email</h4>
                    <p>info@automax.com</p>
                </div>
                <div class="contact-item">
                    <h4>🕐 Horarios</h4>
                    <p>Lunes a Viernes: 9:00 - 18:00<br>Sábados: 9:00 - 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 AutoMax. Todos los derechos reservados. | Diseñado con ❤️ para nuestros clientes</p>
    </footer>
</body>
</html>