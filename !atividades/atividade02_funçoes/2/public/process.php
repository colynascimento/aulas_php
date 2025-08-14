 <script src="js/script.js"></script>

<?php
    function calcularMedia($nota1, $nota2, $nota3, $nota4) {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $media = sprintf("%.2f", $media);
        return $media;
    }

    function situacaoAluno($media) {
        if ($media >= 60) {
            return 'Aprovado';
        } elseif ($media >= 30) {
            return 'Em Recuperação';
        } else {
            return 'Reprovado';
        };
}

    function limparMensagemTabelaVazia() {

    }
?>