<!-- 
    Live Code Editor 
    By: Coding Design

    You can do whatever you want with the code. However if you love my content, you can subscribed my YouTube Channel
    🌎link: www.youtube.com/codingdesign
 -->
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Code Editor</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    :root {
    --dark-blue: #14007a;
    --blue: #1a009c;
    --light-blue: rgb(74, 225, 255);
    --pink: rgb(255, 40, 113);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    font-family: sans-serif;
    background-image: linear-gradient(45deg,var(--light-blue), var(--blue));

    display: flex;
    justify-content: center;
    align-items: center;
}

.code-editor {
    width: 90vw;
    height: 90vh;

    display: grid;
    grid-template-columns: repeat(2, 1fr);
    background-color: #fff;
    border-radius: 1rem;
    overflow: hidden;
    border: 1px solid var(--dark-blue);
}

.code {
    display: grid;
    grid-template-rows: repeat(3, 1fr);
    overflow-y: auto;

    background-color: var(--dark-blue);
    padding: 1rem;
    border-radius: 0 1rem 1rem 0;
}

h1 {
    font: 600 1.2rem sans-serif;
    margin: 1rem 0;
    color: #fff;
}

h1 > img {
    width: 1.3rem;
    margin-right: 1rem;
    vertical-align: middle;
}

.code textarea {
    width: 100%;
    height: calc(100% - 4rem);
    background-color: var(--blue);
    color: var(--light-blue);
    border: none;
    padding: 1rem;
    font-size: 1.1rem;
    resize: vertical;
}

.code textarea::-webkit-scrollbar {
    width: .4rem;
}
.code textarea::-webkit-scrollbar-thumb {
    background-color: var(--pink);
    border-radius: .4rem;
}

#result {
    width: 100%;
    height: 100%;
    border: none;
}

a {
    background-color: lime;
    color: #fff;
    padding: 0 1.2rem;
    border-radius: .5rem;
    text-decoration: none;
    font-size: 2rem;
    float: right;
    cursor: pointer;
}
</style>

<body>
    <div class="code-editor">
        <div class="code">
            <div class="html-code">
                <h1><img src="images/html.png" alt="">HTML</h1>
                <textarea></textarea>
            </div>
            <div class="css-code">
                <h1><img src="images/CSS.png" alt="">CSS</h1>
                <textarea></textarea>
            </div>
            <div class="js-code">
                <h1><img src="images/js.png" alt="">JS</h1>
                <textarea spellcheck="false"></textarea>
            </div>
        </div>
        <iframe id="result"></iframe>
    </div>

    <script src="script.js"></script>
</body>
<script>
    const html_code = document.querySelector('.html-code textarea');
const css_code = document.querySelector('.css-code textarea');
const js_code = document.querySelector('.js-code textarea');
const result = document.querySelector('#result');

function run() {
    // Storing data in Local Storage
    localStorage.setItem('html_code', html_code.value);
    localStorage.setItem('css_code', css_code.value);
    localStorage.setItem('js_code', js_code.value);

    // Executing HTML, CSS & JS code
    result.contentDocument.body.innerHTML = `<style>${localStorage.css_code}</style>` + localStorage.html_code;
    result.contentWindow.eval(localStorage.js_code);
}

// Checking if user is typing anything in input field
html_code.onkeyup = () => run();
css_code.onkeyup = () => run();
js_code.onkeyup = () => run();

// Accessing data stored in Local Storage. To make it more advanced you could check if there is any data stored in Local Storage.
html_code.value = localStorage.html_code;
css_code.value = localStorage.css_code;
js_code.value = localStorage.js_code;
</script>
</html>