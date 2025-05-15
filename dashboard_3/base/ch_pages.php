<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ---- ALUNOS ----///
            case 'lista_alu':
                include "sis/aluno/lista_alu.php";
                break;
            
            case 'fcad_alu':
                include "sis/aluno/fcad_alu.php";
                break;
            
            case 'insere_alu':
                include "sis/aluno/insere_alu.php";
                break;
            
            case 'fedit_alu':
                include "sis/aluno/fedit_alu.php";
                break;
                
            case 'view_alu':
                include "sis/aluno/view_alu.php";
                break;
            
            case 'excluir_alu':
                include "sis/aluno/excluir_alu.php";
                break;
            
            case 'atualiza_alu':
                include "sis/aluno/atualiza_alu.php";
                break;

            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "sis/usuario/lista_usu.php";
                break;
            
            case 'fcad_usu':
                include "sis/usuario/fcad_usu.php";
                break;
            
            case 'insere_usu':
                include "sis/usuario/insere_usu.php";
                break;
            
            case 'fedit_usu':
                include "sis/usuario/fedit_usu.php";
                break;
                
            case 'view_usu':
                include "sis/usuario/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "sis/usuario/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "sis/usuario/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "sis/usuario/ativa_usu.php";
                break;
            
            // ---- Produtos ----///
            case 'lista_pro':
                include "sis/produto/lista_pro.php";
                break;
            
            case 'fcad_pro':
                include "sis/produto/fcad_pro.php";
                break;
            
            case 'insere_pro':
                include "sis/produto/insere_pro.php";
                break;
            
            case 'fedit_pro':
                include "sis/produto/fedit_pro.php";
                break;
                
            case 'view_pro':
                include "sis/produto/view_pro.php";
                break;
            
            case 'excluir_pro':
                include "sis/produto/excluir_pro.php";
                break;
            
            case 'atualiza_pro':
                include "sis/produto/atualiza_pro.php";
                break;

            // ---- Disciplinas ----///
            case 'lista_disc':
                include "sis/disciplina/lista_disc.php";
                break;
            
            case 'fcad_disc':
                include "sis/disciplina/fcad_disc.php";
                break;
            
            case 'insere_disc':
                include "sis/disciplina/insere_disc.php";
                break;
            
            case 'fedit_disc':
                include "sis/disciplina/fedit_disc.php";
                break;
                
            case 'view_disc':
                include "sis/disciplina/view_disc.php";
                break;
            
            case 'excluir_disc':
                include "sis/disciplina/excluir_disc.php";
                break;
            
            case 'atualiza_disc':
                include "sis/disciplina/atualiza_disc.php";
                break;
            default:
                include "base/home.php";
                break;
        }
    }
?>