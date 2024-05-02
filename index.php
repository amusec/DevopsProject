<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivek Kumar - Developer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .skills-list {
            list-style-type: none;
            padding: 0;
        }

        .skills-list li {
            margin-bottom: 10px;
        }

        .skill-level-bar {
            background-color: #ddd;
            height: 20px;
            border-radius: 5px;
            margin-top: 5px;
        }

        .skill-level-fill {
            background-color: #333;
            height: 100%;
            border-radius: 5px;
        }

        .skill-name {
            font-weight: bold;
        }

    </style>
</head>
<body>

<header>
    <h1>Vivek Kumar</h1>
    <p>Skilled Developer</p>
</header>

<div class="container">
    <h2>About Me</h2>
    <p>I am a passionate developer skilled in Java, PHP, and Bash scripting.</p>

    <h2>Skills</h2>
    <ul class="skills-list">
        <li><span class="skill-name">Java</span>
            <div class="skill-level-bar">
                <div class="skill-level-fill" style="width: 80%;"></div>
            </div>
        </li>
        <li><span class="skill-name">PHP</span>
            <div class="skill-level-bar">
                <div class="skill-level-fill" style="width: 80%;"></div>
            </div>
        </li>
        <li><span class="skill-name">Bash</span>
            <div class="skill-level-bar">
                <div class="skill-level-fill" style="width: 40%;"></div>
            </div>
        </li>
    </ul>
</div>

</body>
</html>
