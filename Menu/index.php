<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WhiskersWorks</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="toggle"></div>
        <div id="sidebar">
            <ul>
                <li><a href=#">Home</a></li>
                <li><a href=#">Funcionários</a></li>
                <li><a href=#">Configurações</a></li>
                <li><a href=#">Ajuda</a></li>
            </ul>
        </div>

        <script>
            const toggle = document.getElementById('.toggle');
            const sidebar = document.getElementById('.sidebar');

            document.onclick = function(e){
                if(e.target.id !== 'sidebar' && e.target.id !== 'toggle')
                {
                    toggle.classList.remove('active');
                    sidebar.classList.remove('active');
                }
            }


            toggle.onclick = function(){
            toggle.classList.toggle('active');
            sidebar.classList.toggle('active');
            }
        </script>
    </body>
</html>