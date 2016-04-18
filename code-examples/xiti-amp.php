<amp-analytics type="atinternet" id="atinternet">
  <script type="application/json">
    {
      "vars": {
        "site": "<?= $xiti['site']; ?>",
        "log": "<?= $xiti['log']; ?>",
        "domain": "<?= $xiti['domain']; ?>",
        "title": "<?= $xiti['title']; ?>",
        "level2": "<?= $xiti['level2']; ?>"
      },
      "triggers": {
        "defaultPageview": {
          "on": "visible",
          "request": "pageview"
        }
      }
    }
  </script>
</amp-analytics>