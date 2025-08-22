 <script src="js/script.js"></script>

<?php
    function calcularMedia(float $nota1, float $nota2, float $nota3, float $nota4) {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $media = sprintf("%.2f", $media);
        return $media;
    }

    function situacaoAluno(float $media) {
        if ($media >= 6) {
            return 'Aprovado';
        } elseif ($media >= 3) {
            return 'Em Recuperação';
        } else {
            return 'Reprovado';
        };
}
?>