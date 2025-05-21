<!DOCTYPE html>
<html>
<head>
    <title>CV de {{ $user->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        h1 {
            color: #2d3748;
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            color: #4a5568;
            font-size: 20px;
            margin: 20px 0 10px;
        }
        h3 {
            color: #4a5568;
            font-size: 18px;
            margin: 15px 0 10px;
        }
        p {
            color: #4a5568;
            margin: 10px 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .skill {
            background-color: #f7fafc;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 14px;
        }
        .project {
            margin-bottom: 15px;
        }
        .project-title {
            font-weight: bold;
            color: #2d3748;
        }
        .project-description {
            color: #4a5568;
            margin: 5px 0;
        }
        .project-link {
            color: #3182ce;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $user->name }}</h1>
        @if($user->title)
            <h2>{{ $user->title }}</h2>
        @endif
        @if($user->bio)
            <p>{{ $user->bio }}</p>
        @endif
    </div>

    @if($user->skills->count() > 0)
        <div class="section">
            <h3>Compétences</h3>
            <div class="skills">
                @foreach($user->skills as $skill)
                    <span class="skill">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
    @endif

    @if($user->projects->count() > 0)
        <div class="section">
            <h3>Projets</h3>
            @foreach($user->projects as $project)
                <div class="project">
                    <div class="project-title">{{ $project->title }}</div>
                    <div class="project-description">{{ $project->description }}</div>
                    @if($project->link)
                        <a href="{{ $project->link }}" class="project-link">{{ $project->link }}</a>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</body>
</html> 