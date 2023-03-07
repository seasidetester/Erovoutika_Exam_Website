<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="css/blog_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
</head>
<body>
    <div class="banner">
        <div class="typed_wrap">
        <h1>We Are <span class="typed"></span></h1>
        </div>
    </div>
    </div>

    <div class="blog-entry">
      <img class="blog-img" src="images/blog_user.png" alt="">
      <div class="content-date"><div class="date">2022-10-14</div></div>
      <div class="blog-content">
        <div class="content-title"><h1>Blog Name 1</h1></div>
        <div class="content-tag">HTML/CSS</div>
        <span class="content-text">Lorem ipsum dolor
          sit amet, consectetur adipiscing elit. Cra
          s lacinia consectetur arcu, in semper magn
          a posuere non. Fusce sagittis eros magna,e
          u aliquam libero maximus eu. Sed sed commo
          do neque. Fusce eget volutpat quam. Sed no
          n maximus urna, molestie volutpat orci. Al
          iquam vel viverra mi. Aliquam erat volutpa
          t. Aenean non libero rhoncus, condimentuml 
          justo at, posuere ipsum. Duis sit amet ero
          s orci. Curabitur diam massa, dictum et fe
          lis ac, condimentum posuere dui. Vestibulu
          m aliquet sapien vel eros imperdiet, sit a
          met condimentum enim congue. </span>
          <div class="content-button">Read more</div>
      </div>
    </div>
    <div class="blog-entry">
      <img class="blog-img" src="images/blog_user.png" alt="">
      <div class="content-date"><div class="date">2022-10-15</div></div>
      <div class="blog-content">
        <div class="content-title"><h1>Blog Name 2</h1></div>
        <div class="content-tag">JAVASCRIPT</div>
        <span class="content-text">Lorem ipsum dolor
          sit amet, consectetur adipiscing elit. Cra
          s lacinia consectetur arcu, in semper magn
          a posuere non. Fusce sagittis eros magna,e
          u aliquam libero maximus eu. Sed sed commo
          do neque. Fusce eget volutpat quam. Sed no
          n maximus urna, molestie volutpat orci. Al
          iquam vel viverra mi. Aliquam erat volutpa
          t. Aenean non libero rhoncus, condimentuml 
          justo at, posuere ipsum. Duis sit amet ero
          s orci. Curabitur diam massa, dictum et fe
          lis ac, condimentum posuere dui. Vestibulu
          m aliquet sapien vel eros imperdiet, sit a
          met condimentum enim congue. </span>
          <div class="content-button">Read more</div>
      </div>
    </div>
    <div class="blog-entry">
      <img class="blog-img" src="images/blog_user.png">
      <div class="content-date"><div class="date">2022-10-16</div></div>
      <div class="blog-content">
        <div class="content-title"><h1>Blog Name 3</h1></div>
        <div class="content-tag">PHP</div>
        <span class="content-text">Lorem ipsum dolor
          sit amet, consectetur adipiscing elit. Cra
          s lacinia consectetur arcu, in semper magn
          a posuere non. Fusce sagittis eros magna,e
          u aliquam libero maximus eu. Sed sed commo
          do neque. Fusce eget volutpat quam. Sed no
          n maximus urna, molestie volutpat orci. Al
          iquam vel viverra mi. Aliquam erat volutpa
          t. Aenean non libero rhoncus, condimentuml 
          justo at, posuere ipsum. Duis sit amet ero
          s orci. Curabitur diam massa, dictum et fe
          lis ac, condimentum posuere dui. Vestibulu
          m aliquet sapien vel eros imperdiet, sit a
          met condimentum enim congue. </span>
          <div class="content-button">Read more</div>
      </div>
    </div>
    <script>
        $(function(){
  $(".typed").typed({
    strings: ["Developers.", "Designers.", "People."],
    // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
    stringsElement: null,
    // typing speed
    typeSpeed: 30,
    // time before typing starts
    startDelay: 1200,
    // backspacing speed
    backSpeed: 20,
    // time before backspacing
    backDelay: 500,
    // loop
    loop: true,
    // false = infinite
    loopCount: 5,
    // show cursor
    showCursor: false,
    // character for cursor
    cursorChar: "|",
    // attribute to type (null == text)
    attr: null,
    // either html or text
    contentType: 'html',
    // call when done callback function
    callback: function() {},
    // starting callback function before each string
    preStringTyped: function() {},
    //callback for every typed string
    onStringTyped: function() {},
    // callback for reset
    resetCallback: function() {}
  });
});
    </script>
  </body>

</html>