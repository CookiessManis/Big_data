
<div style="margin: 20px auto">
          <script
            async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2783044520727903"
            crossorigin="anonymous"
          ></script>
          <!-- CSSScript Demo Page -->
          <ins
            class="adsbygoogle"
            style="display: inline-block; width: 728px; height: 90px"
            data-ad-client="ca-pub-2783044520727903"
            data-ad-slot="3025259193"
          ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </section>
    </div>
    <!-- end sidebar -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
  <script  src="<?= base_url('assets/src/script.js') ?>"></script>
  <script>
    try {
      fetch(
        new Request(
          "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js",
          { method: "HEAD", mode: "no-cors" }
        )
      )
        .then(function (response) {
          return true;
        })
        .catch(function (e) {
          var carbonScript = document.createElement("script");
          carbonScript.src =
            "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
          carbonScript.id = "_carbonads_js";
          document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
      console.log(error);
    }
  </script>
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-LLWL5N9CSM"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-LLWL5N9CSM");
  </script>
</html>
