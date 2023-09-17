<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->title;?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= URL ?>public/assets/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <!-- BOX ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Core theme CSS (includes Bootstrap) -->
    <link rel="stylesheet" href="<?= URL ?>public/css/main.css">

    <!-- Chamando Font Awesome -->
    <link rel="stylesheet" href="<?= URL ?>public/fontawesome/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js" type="text/javascript"></script>

    <!-- Axios -->
    <script src="<?=URL;?>public/js/axios.min.js"></script>

    <script src="<?=URL;?>public/js/common.js"></script>

    <?php
        if (isset($this->css)) {
            foreach ($this->css as $c) {
                echo ("<link href=\"" . URL . "$c\" rel=\"stylesheet\" type=\"text/css\">\n");
            }
        }
    ?>
  
    <?php
        if (isset($this->js)) {
            foreach ($this->js as $j) {
                echo ("<script src='" . URL . "$j' type='text/javascript'></script>\n");
            }
        }
    ?>
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <!--========== NAV ==========-->
        <h4>Projeto MVC com Vue.js</h4>
    </header>


    <div id="mainLayout"></div>

    <script>
        const mainLayout = new Vue({
            el: '#mainLayout',
            template: `
              <div>
                  <AppVue ref='AppVue'></AppVue>
              </div>
            `,
            data: function() {
                return {}
            },
            methods: {}
        })
    </script>
