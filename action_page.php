<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>projecten - pi lessons</title>
    <meta property="og:title" content="projecten - pi lessons" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Titillium Web;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-scheme-green100);
        background-color: var(--dl-color-scheme-yellow20);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <script type="text/javascript"> ... </script> -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./projecten.css" rel="stylesheet" />

      <div class="projecten-container">
        <div class="navbar-container">
          <div class="max-width">
            <div class="projecten-logo">
              <img
                alt="image"
                src="public/playground_assets/main.ico"
                class="projecten-image"
              />
              <span class="projecten-text">pi lessons</span>
            </div>
          </div>
        </div>
        <div class="projecten-hero hero-container section-container">
          <div class="projecten-max-width1 max-width"></div>
        </div>
      </div>
    </div>
    <script>
      window.onload = () => {
        const runAllScripts = () => {
          initializeAllAccordions()
        }

        const listenForUrlChanges = () => {
          let url = location.href
          document.body.addEventListener(
            'click',
            () => {
              requestAnimationFrame(() => {
                if (url !== location.href) {
                  runAllScripts()
                  url = location.href
                }
              })
            },
            true
          )
        }

        const initializeAllAccordions = () => {
          const allAccordions = document.querySelectorAll('[data-role="Accordion"]');

          allAccordions.forEach((accordion) => {
            const accordionHeader = accordion.querySelector('[data-type="accordion-header"]')
            const accordionContent = accordion.querySelector('[data-type="accordion-content"]')

            accordionHeader.addEventListener('click', () => {
              if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = ''
              } else {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`
              }
            })
          })
        }

        listenForUrlChanges()
        runAllScripts()
      }
    </script>
  </body>
</html>
