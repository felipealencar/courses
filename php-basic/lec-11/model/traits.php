<?php
trait SlugNome {
    public function slug(): string {
        if ( ! property_exists($this, 'nome')) { 
            throw new RuntimeException('Faltando o atributo nome para o retorno do slug.');
        }

        return strtolower(
            preg_replace('/[^A-Za-z0-9-]+/', '-', $this->nome)
        );
    }
}

class Curso {    
    use SlugNome;
    private $nome = "PWEB";
}

class Formacao {
    use SlugNome;
}

$curso = new Curso();
echo $curso->slug();