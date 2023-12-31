
<nav class="menulateral shadow-lg">
    <div class="btn-expandir">
       <a href="https://www.egp.ce.gov.br/" target="_blank"><img src="imgs/logoEGP2.png" alt="logo" id="logo"></a>
    </div>
    <!-- os topicos começam aqui  -->
    <ul>
        <!-- ADICIONEI NOVOS ÍCONES NOS SUBTÓPICOS -->
        <li class="menu">
            <a href="index.php">
                <span class="icon "><i class="bi bi-bullseye"></i></span>
                <span class="txt">Objetivos</span>
            </a>
        </li>

        <li class="menu">
            <a href="topico01.php">
                <span class="icon "><i class="bi bi-1-circle"></i>
                </span>
                <span class="txt">Apresentação</i></span>
            </a>
        </li>

        <!-- topico com Subtópico -->
        <button class="dropdown-btn">
            <li class="menu">
                <a data-valor="topico02.php">
                    <span class="icon space"><i class="bi bi-2-circle"></i></span>
                    <span class="txt">Usabilidade</span>
                        <i class="bi bi-caret-down-fill barra-sub"></i>
                </a>
            </li>
        </button>
        <!-- subtopicos aqui  -->
        <div class="dropdown-container">
            <a href="topico02.php">
                <i class="bi bi-journals circulo"></i>Início</a>
            <a href="#item2.1">
                <i class="bi bi-journals circulo"></i>2.1 - NBR ISO 9241-11</a>
            <a href="#item2.2">
                <i class="bi bi-journals circulo"></i>2.2 -ISO/IEC 25000 (SQuaRE)</a>
            <a href="#item2.3">
                <i class="bi bi-journals circulo"></i>2.3 - Heurísticas de Nielsen</a>
            <a href="#item2.4">
                <i class="bi bi-journals circulo"></i>2.4 - O que não é usual?</a>
        </div>

        <li class="menu">
            <a href="referencias.php">
                <span class="icon"><i class="bi bi-book-half"></i></span>
                <span class="txt">Referências</span>
            </a>
        </li>

    </ul>
</nav>

</nav>
