export const personalInfo = {
  name: "Tu Nombre",
  title: "Desarrollador Full Stack",
  subtitle: "Creando experiencias digitales modernas y funcionales",
  email: "tu@email.com",
  github: "https://github.com/tuusuario",
  linkedin: "https://linkedin.com/in/tuusuario",
  bio: "Soy un desarrollador apasionado por la tecnologia con experiencia en desarrollo web y movil. Me especializo en crear aplicaciones modernas, escalables y con excelente experiencia de usuario.",
  bioExtended:
    "Desde que escribi mi primera linea de codigo, supe que esto era lo mio. Me encanta resolver problemas complejos y transformar ideas en productos digitales que la gente disfrute usar. Siempre estoy aprendiendo nuevas tecnologias y buscando mejorar mis habilidades.",
  location: "Ciudad, Pais",
  available: true,
  typingTexts: [
    "Desarrollador Full Stack",
    "Creador de apps moviles",
    "Apasionado por el codigo",
    "Amante del buen diseno",
  ],
};

export const interests = [
  { icon: "{ }", label: "Codigo limpio", description: "Escribir codigo legible y mantenible" },
  { icon: "< >", label: "Open Source", description: "Contribuir a la comunidad dev" },
  { icon: "01", label: "Nuevas tecnologias", description: "Siempre aprendiendo algo nuevo" },
  { icon: "UI", label: "Diseno UI/UX", description: "Crear interfaces intuitivas" },
  { icon: ">>", label: "Automatizacion", description: "Optimizar procesos repetitivos" },
  { icon: "db", label: "Arquitectura", description: "Disenar sistemas escalables" },
];

export const skills = [
  { name: "React", category: "Frontend", level: 90 },
  { name: "React Native", category: "Mobile", level: 85 },
  { name: "TypeScript", category: "Lenguaje", level: 88 },
  { name: "Node.js", category: "Backend", level: 85 },
  { name: "Expo", category: "Mobile", level: 80 },
  { name: "Tailwind CSS", category: "Frontend", level: 92 },
  { name: "PostgreSQL", category: "Base de datos", level: 75 },
  { name: "MongoDB", category: "Base de datos", level: 78 },
  { name: "Git", category: "Herramientas", level: 88 },
  { name: "Docker", category: "DevOps", level: 70 },
  { name: "Python", category: "Lenguaje", level: 72 },
  { name: "Firebase", category: "Backend", level: 80 },
];

export const projects = [
  {
    title: "E-Commerce App",
    description:
      "Aplicacion de comercio electronico completa con carrito de compras, pagos y gestion de productos.",
    technologies: ["React Native", "Node.js", "MongoDB"],
    github: "https://github.com/tuusuario/ecommerce",
    demo: "https://ecommerce-demo.com",
    color: "from-blue-500/10 to-violet-500/10",
  },
  {
    title: "Task Manager",
    description:
      "Aplicacion de gestion de tareas con drag & drop, categorias y recordatorios.",
    technologies: ["React", "TypeScript", "Firebase"],
    github: "https://github.com/tuusuario/taskmanager",
    demo: "https://taskmanager-demo.com",
    color: "from-emerald-500/10 to-cyan-500/10",
  },
  {
    title: "Weather Dashboard",
    description:
      "Dashboard del clima en tiempo real con graficos interactivos y pronosticos.",
    technologies: ["React", "Tailwind CSS", "API REST"],
    github: "https://github.com/tuusuario/weather",
    demo: "https://weather-demo.com",
    color: "from-amber-500/10 to-orange-500/10",
  },
  {
    title: "Chat en Tiempo Real",
    description:
      "Aplicacion de mensajeria en tiempo real con salas de chat y notificaciones.",
    technologies: ["React", "Socket.io", "Node.js"],
    github: "https://github.com/tuusuario/chat",
    demo: "https://chat-demo.com",
    color: "from-rose-500/10 to-pink-500/10",
  },
];

export const experience = [
  {
    company: "Tech Company",
    role: "Desarrollador Full Stack Senior",
    period: "2023 - Presente",
    description:
      "Desarrollo de aplicaciones web y moviles usando React, Node.js y AWS. Liderazgo tecnico de un equipo de 5 desarrolladores.",
    tags: ["React", "AWS", "Node.js"],
  },
  {
    company: "Startup Digital",
    role: "Desarrollador Frontend",
    period: "2021 - 2023",
    description:
      "Desarrollo de interfaces de usuario modernas con React y TypeScript. Implementacion de disenos responsivos y accesibles.",
    tags: ["React", "TypeScript", "Figma"],
  },
  {
    company: "Agencia Web",
    role: "Desarrollador Junior",
    period: "2019 - 2021",
    description:
      "Desarrollo de sitios web para clientes usando HTML, CSS, JavaScript y WordPress. Mantenimiento y optimizacion de aplicaciones existentes.",
    tags: ["HTML/CSS", "JavaScript", "WordPress"],
  },
];

export const navLinks = [
  { label: "Inicio", href: "hero" },
  { label: "Sobre mi", href: "about" },
  { label: "Habilidades", href: "skills" },
  { label: "Proyectos", href: "projects" },
  { label: "Experiencia", href: "experience" },
  { label: "Contacto", href: "contact" },
];
