<?php
define('BASE_URL', '/mark-portfolio/');
function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

$site = [
    'name'     => 'Mark Macalood',
    'role'     => 'Third-year BSIT student',
    'intro'    => 'Exploring web development, software engineering, and technology-driven solutions.',
    'school'   => 'Your University',          // TODO: your school
    'email'    => 'marklesthermacalood@gmail.com',   // TODO
    'github'   => 'https://github.com/marklesthermacalood-boop',   // TODO
    'linkedin' => 'https://www.linkedin.com/in/your-username', // TODO
    'resume'   => 'assets/documents/macaloodCV.pdf',
];

$about = [
    'A third-year Bachelor of Science in Information Technology student with a strong interest in software and web development. I enjoy building technology-driven solutions that address real-world problems, from educational platforms and appointment systems to online ordering applications.',
    'I believe the best way to learn is through building, experimenting, and continuously improving. Each project allows me to strengthen my problem-solving skills, expand my technical knowledge, and approach challenges from different perspectives.',
];

$skills = [
    'Frontend Development'  => ['HTML', 'CSS', 'JavaScript'],
    'Backend Development'    => ['PHP', 'C#'],
    'Programming Languages' => ['Java', 'Python'],
    'Database Management'   => ['MySQL', 'MSSQL'],
    'Development Tools'     => ['Visual Studio', 'VS Code', 'GitHub'],
];

$projects = [
    [
        'title' => 'Win Soles', 'status' => 'Academic Project',
        'desc'  => 'A sneaker marketplace web-based application designed to connect buyers and sellers through an online platform.',
        'tech'  => ['HTML', 'CSS', 'MySQL', 'JavaScript'],
        'features' => ['User authentication', 'Product listings', 'Order processing'],
        'image' => 'thumbnails/winsolesThumbnail.png', 'github' => '', 'demo' => 'https://winsoles.vercel.app',
    ],
    [
        'title' => 'JavaLearn Hub', 'status' => 'Academic Project',
        'desc'  => 'A web-based Java learning platform developed to help BSIT freshmen understand fundamental Java programming concepts through accessible learning materials.',
        'tech'  => ['HTML', 'CSS', 'JavaScript', 'Firebase'],
        'features' => ['Java programming tutorials', 'Structured learning materials', 'Beginner-friendly interface', 'Web-based learning platform'],
        'image' => 'thumbnails/javalearnThumbnail.png', 'github' => '', 'demo' => 'https://javalearn.site',
    ],
    [
        'title' => 'School Canteen Pre-Order System', 'status' => 'Academic Project',
        'desc'  => 'A school canteen pre-order management system developed using C#, with API endpoints documented and tested through Swagger.',
        'tech'  => ['C#', 'MSSQL', 'Swagger'],
        'features' => ['Database management', 'REST API development', 'API documentation and testing', 'Order processing'],
        'image' => 'thumbnails/SchoolOrderingSystemThumbnail.png', 'github' => '', 'demo' => '',
    ],
];

$education = [
    [
        'title' => 'Work Immersion',
        'meta' => 'IXS COMMERCIAL INC. | 2022',
        'text' => 'Gained firsthand exposure to a professional ICT environment, developing an understanding of workplace operations, teamwork, and professional responsibilities. Experienced the practical application of technical knowledge in an industry setting.',
        'image' => 'assets/images/experienceImages/workImmersion.jpg',
    ],
    [
        'title' => 'JDVP',
        'meta' => 'EMMAUS CHRISTIAN SCHOOL | 2023',
        'text' => 'Participated in a technical-vocational training program focused on developing practical and industry-relevant skills. Gained additional technical knowledge and hands-on experience through structured training and competency-based learning.',
        'image' => 'assets/images/experienceImages/jdvp.jpg',
    ],
    [
        'title' => 'BSIT PROGRAM',
        'meta' => 'PLV | 2024 - Present',
        'text' => 'Currently pursuing a Bachelor of Science in Information Technology, developing skills in software development, web technologies. Actively engaged in academic projects involving system development, problem-solving, and practical application of IT concepts.',
        'image' => 'assets/images/experienceImages/BSInformationTechnology.jpg',
    ],
];
