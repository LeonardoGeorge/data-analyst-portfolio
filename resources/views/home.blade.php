@extends('layouts.app')

@section('content')
    <!-- Cabeçalho Neon -->
  <header class="text-center mb-12">
    <div class="flex items-center justify-center gap-4 mb-4">
        <div class="">.</div>
        <!-- Logo com efeito neon -->
        <section class="neon-border p-2 rounded-full" style="display: flex; justify-content: center; align-items: center;">
            <img 
                src="{{ asset('img/Logo.png') }}" 
                alt="Logo Leonardo Dias" 
                class="h-16 w-16 object-contain neon-logo"
                style="filter: drop-shadow(0 0 5px #9d00ff),
                width: 500px; height: 500px; border-radius: 50%;"
            >
        </section>
        <!-- Texto com efeito neon -->
        <h1 id="name-title" class="text-5xl font-bold text-neon-purple neon-pulse type-effect">
             LEONARDO_DIAS | ANALISTA_DE_DADOS
        </h1>
    </div>
</header>
    <!-- Sobre Mim Ampliado -->
    <section class="neon-border p-8 mb-12">
        <h2 class="" style='color: #fff'>Sobre_mim</h2>
        <div class="space-y-4">
            <p class="terminal-command">>> Analista de Dados | PHP/Laravel | Ruby on Rails</p>
            <p class="terminal-command">>> Estudante de Banco de Dados (Estácio - 2º semestre)</p>
            <p class="terminal-command">>> +1 ano como freelancer com experiência fullstack</p>
            <p class="terminal-command">>> Especialização em soluções robustas e seguras</p>
            <br>
            <div class="mt-6 p-4 bg-gray-900 rounded neon-border">
                <p style='color: #fff'>"Iniciei como Front-end com JavaScript/TypeScript, migrei para dados (MySQL/PostgreSQL) e hoje foco em back-end com PHP/Laravel, aplicando conhecimentos acadêmicos em Banco de Dados para criar soluções eficientes."</p>
            </div>
        </div>
    </section>

    <!-- Linha do Tempo Profissional -->
    <section class="mb-12">
        <h2 class="text-3xl text-neon-purple mb-6">LINHA_DO_TEMPO_EXPERIENCIA</h2>
        <div class="space-y-4">
            <div class="neon-card neon-border p-6 rounded-lg">
                <h3 class="text-2xl text-neon-green mb-2">=> Desenvolvedor Front-End Freelancer</h3>
                <p class="text-neon-purple mb-2">Jan. 2023 - Jun. 2024</p>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Atualização de layouts de e-mail responsivos para campanhas de marketing</li>
                    <li>Correção e padronização de templates de feedback pós-compra</li>
                    <li>Desenvolvimento de componentes UI reutilizáveis para sistemas SaaS</li>
                    <li>Otimização de performance em landing pages (redução de 40% no tempo de carregamento)</li>
                </ul>
            </div>
            <div class="neon-card neon-border p-6 rounded-lg">
                <h3 class="text-2xl text-neon-green mb-2"> => Transição para Back-end</h3>
                <p class="text-neon-purple mb-2">... 2023 - 2024</p>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Experiência inicial como Front-end (JavaScript/TypeScript)</li>
                    <li>Migração para gerenciamento de bancos de dados</li>
                    <li>Especialização em PHP/Laravel</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Projetos Destacados -->
    <section class="mb-12">
        <h2 class="text-3xl text-neon-green mb-6">// PROJECTS</h2>
        <div class="grid md:grid-cols-2 gap-6">
            @foreach([
                [
                    'name' => '. => WhatsApp Mass Sender',
                    'tech' => '..... PHP, Laravel, JavaScript',
                    'link' => 'https://github.com/LeonardoGeorge/whatsapp-mass-sender'
                ],
                [
                    'name' => '. => Venda Fácil',
                    'tech' => '..... PHP, Laravel, JavaScript',
                    'link' => 'https://github.com/LeonardoGeorge/venda_faci l--Laravel'
                ],
                [
                    'name' => '. => Snake Game',
                    'tech' => '..... JavaScript',
                    'link' => 'https://github.com/LeonardoGeorge/-35-Snake Game'
                ],
                [
                    'name' => '. => API Laravel + PostgreSQL',
                    'tech' => '..... CRUD com autenticação',
                    'link' => 'https://github.com/LeonardoGeorge'
                ]
            ] as $project)
            <div class="neon-card neon-border p-6 rounded-lg hover:bg-gray-900 transition">
                <h3 class="text-xl text-neon-purple mb-2">{{ $project['name'] }}</h3>
                <p class="text-gray-300 mb-3">{{ $project['tech'] }}</p>
                <a href="{{ $project['link'] }}" target="_blank" class="inline-block bg-neon-green text-black px-4 py-2 rounded hover:bg-green-400 transition">
                    Ver no GitHub
                </a>
            </div>
            @endforeach
        </div>
    </section>
<br>
    <!-- Habilidades Técnicas -->
    <section class="mb-12 neon-border p-6">
        <div class="skills-list text-gray-300 space-y-2">
            @foreach([
                'PHP', 'Laravel', 'Ruby on Rails', 'PostgreSQL',
                'MySQL', 'TypeScript', 'HTML5', 'CSS3',
                'Integração de APIs', 'Docker', 'AWS',
                'Google Cloud', 'HeidiSQL', 'XAMPP'
            ] as $skill)
            <div class="flex items-center">
                <span class="text-neon-green mr-2">-></span>
                <span>{{ $skill }}</span>
            </div>
            @endforeach
        </div>
    </section>    
<br>

    <!-- Formação Acadêmica -->
    <section class="mb-12 neon-border p-6">
        <h2 class="text-3xl text-neon-green mb-6">EDUCAÇÃO</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-900">
                <thead>
                    <tr class="text-neon-purple">
                        <th class="px-4 py-2 text-left">Curso</th>
                        <th class="px-4 py-2 text-left">... Instituição</th>
                        <th class="px-4 py-2 text-left">Ano</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach([
                        ['Banco de Dados', '... Estácio', '2024 - Presente'],
                        ['PHP & Laravel', '... B7Web', '2025 - Presente'],
                        ['Ruby on Rails', '... Autodidata', '2025 - Presente'],
                        ['Web Front-end', '... B7Web', '2023'],
                        ['Banco de Dados', '... B7Web', '2024']
                    ] as $education)
                    <tr class="border-t border-gray-700">
                        <td class="px-4 py-3 text-gray-300">{{ $education[0] }}</td>
                        <td class="px-4 py-3 text-gray-300">{{ $education[1] }}</td>
                        <td class="px-4 py-3 text-gray-300">{{ $education[2] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Contato -->
   <section id="contact" class="contact-section" class="mb-12 neon-border p-6">
    <h2>... CONTATO ... </h2>

    <div class="contact-container">
        <!-- Coluna esquerda: Informações -->
        <div class="contact-info" style="color: #fff">
            <p>■ Conchal/SP</p>
            <p>■ leonardogeorge30@gmail.com</p>
            <p>● (19) 99003-1768</p>
            <p>🌐 Espanhol Fluente</p>
        </div>

        <!-- Coluna central: Formulário -->
        <div class="contact-form">
            <form>
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Mensagem"></textarea>
                <button type="submit">Enviar Mensagem</button>
            </form>
            <div class="">.</div>
            <div class="">.</div>
        </div>
        
        <br>

        <!-- Coluna direita: Download CV -->
        <div class="contact-download">
            <a href="{{ asset('storage/cv.pdf') }}" download class="btn-neon">
                <span>⬇ Download CV</span>
            </a>
        </div>
    </div>
</section>
@endsection