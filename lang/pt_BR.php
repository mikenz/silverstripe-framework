<?php

/**
 * Portuguese (Brazil) language pack
 * @package sapphire
 * @subpackage i18n
 */

$en_US_exists = isset($lang['en_US']);
i18n::include_locale_file('sapphire', 'en_US', true);

global $lang;

if(array_key_exists('pt_BR', $lang) && is_array($lang['pt_BR'])) {
	$lang['pt_BR'] = array_merge($lang['en_US'], $lang['pt_BR']);
} else {
	$lang['pt_BR'] = $lang['en_US'];
}
if (!$en_US_exists) {
	unset($lang['en_US']);
}

$lang['pt_BR']['AdvancedSearchForm']['ALLWORDS'] = 'Todas as palavras';
$lang['pt_BR']['AdvancedSearchForm']['ATLEAST'] = 'Pelo menos uma destas palavras';
$lang['pt_BR']['AdvancedSearchForm']['EXACT'] = 'Frase exata';
$lang['pt_BR']['AdvancedSearchForm']['FROM'] = 'De';
$lang['pt_BR']['AdvancedSearchForm']['GO'] = 'Ir';
$lang['pt_BR']['AdvancedSearchForm']['LASTUPDATED'] = 'Última atualização';
$lang['pt_BR']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'ÚLTIMA ATUALIZAÇÃO';
$lang['pt_BR']['AdvancedSearchForm']['PAGETITLE'] = 'Título da página';
$lang['pt_BR']['AdvancedSearchForm']['RELEVANCE'] = 'Relevancia';
$lang['pt_BR']['AdvancedSearchForm']['SEARCHBY'] = 'PROCURAR POR';
$lang['pt_BR']['AdvancedSearchForm']['SORTBY'] = 'ORDENAR RESULTADOS POR';
$lang['pt_BR']['AdvancedSearchForm']['TO'] = 'Para';
$lang['pt_BR']['AdvancedSearchForm']['WITHOUT'] = 'Sem nenhuma destas palavras';
$lang['pt_BR']['BankAccountField']['VALIDATIONJS'] = 'Por favor, entre com uma conta bancaria valida';
$lang['pt_BR']['BasicAuth']['ENTERINFO'] = 'Por favor entre nome de usuário e senha.';
$lang['pt_BR']['BasicAuth']['ERRORNOTADMIN'] = 'Este usuário não é um administrador';
$lang['pt_BR']['BasicAuth']['ERRORNOTREC'] = 'Este nome de usuário / senha não é reconhecido';
$lang['pt_BR']['BBCodeParser']['ALIGNEMENT'] = 'Alinhamento';
$lang['pt_BR']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'alinhado a direito';
$lang['pt_BR']['BBCodeParser']['BOLD'] = 'Texto em Negrito';
$lang['pt_BR']['BBCodeParser']['BOLDEXAMPLE'] = 'Negrito';
$lang['pt_BR']['BBCodeParser']['CODE'] = 'Bloco de código';
$lang['pt_BR']['BBCodeParser']['CODEDESCRIPTION'] = 'Bloco de código não formatado';
$lang['pt_BR']['BBCodeParser']['CODEEXAMPLE'] = 'Bloco de código';
$lang['pt_BR']['BBCodeParser']['COLORED'] = 'Texto colorido';
$lang['pt_BR']['BBCodeParser']['COLOREDEXAMPLE'] = 'Texto em Azul';
$lang['pt_BR']['BBCodeParser']['EMAILLINK'] = 'Link para e-mail';
$lang['pt_BR']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Cria link para um e-mail';
$lang['pt_BR']['BBCodeParser']['IMAGE'] = 'Imagem';
$lang['pt_BR']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Mostrar imagem no post';
$lang['pt_BR']['BBCodeParser']['ITALIC'] = 'Texto em Itálico';
$lang['pt_BR']['BBCodeParser']['ITALICEXAMPLE'] = 'Itálico';
$lang['pt_BR']['BBCodeParser']['LINK'] = 'link para site';
$lang['pt_BR']['BBCodeParser']['LINKDESCRIPTION'] = 'Link para outro site ou URL';
$lang['pt_BR']['BBCodeParser']['UNDERLINE'] = 'Texto subinhado';
$lang['pt_BR']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Sublinhado';
$lang['pt_BR']['BBCodeParser']['UNORDERED'] = 'Marcadores';
$lang['pt_BR']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Marcadores';
$lang['pt_BR']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'Item não ordenado 1';
$lang['pt_BR']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Você alterou sua senha para';
$lang['pt_BR']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Agora, você pode usar as seguintes credenciais para realizar o login:';
$lang['pt_BR']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['pt_BR']['ChangePasswordEmail.ss']['HELLO'] = 'Olá';
$lang['pt_BR']['ChangePasswordEmail.ss']['PASSWORD'] = 'Senha';
$lang['pt_BR']['CMSMain']['DELETE'] = 'Excluir do site de rascunho';
$lang['pt_BR']['CMSMain']['DELETEFP'] = 'Excluir do site ativo';
$lang['pt_BR']['CMSMain']['RESTORE'] = 'Restaurar';
$lang['pt_BR']['CMSMain']['SAVE'] = 'Salvar';
$lang['pt_BR']['ComplexTableField']['CLOSEPOPUP'] = 'Fechar janela';
$lang['pt_BR']['ComplexTableField.ss']['ADDITEM'] = 'Incluir %s';
$lang['pt_BR']['ComplexTableField.ss']['CSVEXPORT'] = 'Exportar para CSV';
$lang['pt_BR']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Nenhum ítem encontrado';
$lang['pt_BR']['ComplexTableField.ss']['SORTASC'] = 'Ordenar ascendente';
$lang['pt_BR']['ComplexTableField.ss']['SORTDESC'] = 'Ordenar descendente';
$lang['pt_BR']['ComplexTableField']['SUCCESSADD'] = '%s %s %s incluído(s)';
$lang['pt_BR']['ComplexTableField']['SUCCESSEDIT'] = '%s %s %s salvo(s)';
$lang['pt_BR']['ComplexTableField_popup.ss']['NEXT'] = 'Próximo';
$lang['pt_BR']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Anterior';
$lang['pt_BR']['CompositeDateField']['DAY'] = 'Dia';
$lang['pt_BR']['CompositeDateField']['DAYJS'] = 'dia';
$lang['pt_BR']['CompositeDateField']['MONTH'] = 'Mês';
$lang['pt_BR']['CompositeDateField']['MONTHJS'] = 'mês';
$lang['pt_BR']['CompositeDateField']['VALIDATIONJS1'] = 'Por favor, assegure que você informou o';
$lang['pt_BR']['CompositeDateField']['VALIDATIONJS2'] = 'corretamente.';
$lang['pt_BR']['CompositeDateField']['YEARJS'] = 'ano';
$lang['pt_BR']['ConfirmedFormAction']['CONFIRMATION'] = 'Tem certeza?';
$lang['pt_BR']['ConfirmedPasswordField']['ATLEAST'] = 'A senha tem que possuir no minimo %s caracteres.';
$lang['pt_BR']['ConfirmedPasswordField']['BETWEEN'] = 'As senhas devem ter o numero de caracteres entre %s  e %s.';
$lang['pt_BR']['ConfirmedPasswordField']['HAVETOMATCH'] = 'As senhas devem ser idênticas.';
$lang['pt_BR']['ConfirmedPasswordField']['LEASTONE'] = 'As senhas devem ter no minimo 1 numero e um caractere alfanumérico.';
$lang['pt_BR']['ConfirmedPasswordField']['MAXIMUM'] = 'A senha tem que possuir no máximo %s caracteres.';
$lang['pt_BR']['ConfirmedPasswordField']['NOEMPTY'] = 'As senhas não podem ser vazias';
$lang['pt_BR']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Trocar senha';
$lang['pt_BR']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Você precisa entrar com sua senha do CMS para ver os rascunhos ou o conteúdo arquivado. <a href="%s">Clique aqui para voltar para o site publicado.</a>';
$lang['pt_BR']['Controller']['FILE'] = 'Arquivo';
$lang['pt_BR']['Controller']['IMAGE'] = 'Imagem';
$lang['pt_BR']['CreditCardField']['FIRST'] = 'primeiro';
$lang['pt_BR']['CreditCardField']['FOURTH'] = 'quarto';
$lang['pt_BR']['CreditCardField']['SECOND'] = 'segundo';
$lang['pt_BR']['CreditCardField']['THIRD'] = 'terceiro';
$lang['pt_BR']['CreditCardField']['VALIDATIONJS1'] = 'Por favor, assegure que você informou o';
$lang['pt_BR']['CreditCardField']['VALIDATIONJS2'] = 'numero do cartão correto.';
$lang['pt_BR']['CurrencyField']['CURRENCYSYMBOL'] = 'R$';
$lang['pt_BR']['CurrencyField']['VALIDATIONJS'] = 'Por favor, entre com um valor monetário correto.';
$lang['pt_BR']['DataObject']['PLURALNAME'] = 'Dados dos objetos';
$lang['pt_BR']['DataObject']['SINGULARNAME'] = 'Dado do objeto';
$lang['pt_BR']['Date']['DAY'] = 'dia';
$lang['pt_BR']['Date']['DAYS'] = 'dias';
$lang['pt_BR']['Date']['HOUR'] = 'hora';
$lang['pt_BR']['Date']['HOURS'] = 'horas';
$lang['pt_BR']['Date']['MIN'] = 'min';
$lang['pt_BR']['Date']['MINS'] = 'mins';
$lang['pt_BR']['Date']['MONTH'] = 'mês';
$lang['pt_BR']['Date']['MONTHS'] = 'meses';
$lang['pt_BR']['Date']['SEC'] = 'sec';
$lang['pt_BR']['Date']['SECS'] = 'secs';
$lang['pt_BR']['Date']['TIMEDIFFAGO'] = '%s atrás';
$lang['pt_BR']['Date']['TIMEDIFFAWAY'] = '%s atras';
$lang['pt_BR']['Date']['YEAR'] = 'ano';
$lang['pt_BR']['Date']['YEARS'] = 'anos';
$lang['pt_BR']['DateField']['NOTSET'] = 'não informado';
$lang['pt_BR']['DateField']['TODAY'] = 'hoje';
$lang['pt_BR']['DateField']['VALIDATIONJS'] = 'Por favor, entre com o formato de data correto (DD/MM/YYYY).';
$lang['pt_BR']['DateField']['VALIDDATEFORMAT'] = 'Por favor,  informe uma data válida(DD/MM/YYYY).';
$lang['pt_BR']['DMYDateField']['VALIDDATEFORMAT'] = 'Por favor, entre com o formato de data correto (DD-MM-YYYY).';
$lang['pt_BR']['DropdownField']['CHOOSE'] = 'Selecione';
$lang['pt_BR']['EmailField']['VALIDATION'] = 'Por favor escreva um endereço de e-mail';
$lang['pt_BR']['EmailField']['VALIDATIONJS'] = 'Por favor, ente com um endereço de email.';
$lang['pt_BR']['ErrorPage']['400'] = '400 - Requisição Invalida';
$lang['pt_BR']['ErrorPage']['401'] = '401 - Não autorizado';
$lang['pt_BR']['ErrorPage']['403'] = '403 - Proibido';
$lang['pt_BR']['ErrorPage']['404'] = '404 - Arquivo não encontrado';
$lang['pt_BR']['ErrorPage']['405'] = '405 - Método não permitido';
$lang['pt_BR']['ErrorPage']['406'] = '406 - Não aceitavel';
$lang['pt_BR']['ErrorPage']['407'] = '407 - Requer autentificação do proxy';
$lang['pt_BR']['ErrorPage']['408'] = '408 - tempo de requisição esgotado';
$lang['pt_BR']['ErrorPage']['409'] = '409 - Conflito';
$lang['pt_BR']['ErrorPage']['410'] = '410 - Finalizado';
$lang['pt_BR']['ErrorPage']['411'] = '411 - Tamanho requisitado';
$lang['pt_BR']['ErrorPage']['412'] = '412 - Condição prévia não atendida';
$lang['pt_BR']['ErrorPage']['413'] = '413 - dados requisição muito grande';
$lang['pt_BR']['ErrorPage']['414'] = '414 -URI requisitado muito grande';
$lang['pt_BR']['ErrorPage']['415'] = '415 - tipo de arquivo não suportado';
$lang['pt_BR']['ErrorPage']['416'] = '416 - Escala do pedido não satisfaz';
$lang['pt_BR']['ErrorPage']['417'] = '417 - A expectativa falhou';
$lang['pt_BR']['ErrorPage']['500'] = '500 - Erro interno do servidor';
$lang['pt_BR']['ErrorPage']['501'] = '501 - Não implementado';
$lang['pt_BR']['ErrorPage']['502'] = '502 - Conecção ruim';
$lang['pt_BR']['ErrorPage']['503'] = '503 - Serviço não esta habilitado';
$lang['pt_BR']['ErrorPage']['504'] = '504 - Tempo de conecção esgorado';
$lang['pt_BR']['ErrorPage']['505'] = '505 - Versão do HTTP não suporado';
$lang['pt_BR']['ErrorPage']['CODE'] = 'Código do erro';
$lang['pt_BR']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>desculpe, mas parece que você esta tentando acessar uma página que não existe.</p><p>Por favor, verifique se você digitou a URL corretamente e tente novamente</p>';
$lang['pt_BR']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Página não encontrada';
$lang['pt_BR']['ErrorPage']['PLURALNAME'] = 'Página de Erro';
$lang['pt_BR']['ErrorPage']['SINGULARNAME'] = 'Página de erro';
$lang['pt_BR']['File']['Content'] = 'Conteudo';
$lang['pt_BR']['File']['Filename'] = 'Nome do Arquivo';
$lang['pt_BR']['File']['INVALIDEXTENSION'] = 'Extensão não é permitida (válida: %s)';
$lang['pt_BR']['File']['Name'] = 'Nome';
$lang['pt_BR']['File']['NOFILESIZE'] = 'O tamanho do arquivo é zero bytes.';
$lang['pt_BR']['File']['PLURALNAME'] = 'Arquivos';
$lang['pt_BR']['File']['SINGULARNAME'] = 'Arquivo';
$lang['pt_BR']['File']['Sort'] = 'Ordenação';
$lang['pt_BR']['File']['Title'] = 'Titulo';
$lang['pt_BR']['File']['TOOLARGE'] = 'Tamanho do arquivo muito grande, máximo %s permitido.';
$lang['pt_BR']['FileIFrameField']['NOTEADDFILES'] = 'Você pode adicionar arquivos que você já havia salvo anteriormente.';
$lang['pt_BR']['Folder']['CREATED'] = 'Primeiros arquivos enviados';
$lang['pt_BR']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Excluir miniaturas não utilizadas';
$lang['pt_BR']['Folder']['DELSELECTED'] = 'Excluir arquivos selecionados';
$lang['pt_BR']['Folder']['DETAILSTAB'] = 'Detalhes';
$lang['pt_BR']['Folder']['FILENAME'] = 'nome do arquivo';
$lang['pt_BR']['Folder']['FILESTAB'] = 'Arquivos';
$lang['pt_BR']['Folder']['LASTEDITED'] = 'Ultima atualização';
$lang['pt_BR']['Folder']['PLURALNAME'] = 'Arquivos';
$lang['pt_BR']['Folder']['SINGULARNAME'] = 'Arquivo';
$lang['pt_BR']['Folder']['TITLE'] = 'Titulo';
$lang['pt_BR']['Folder']['TYPE'] = 'Tipo';
$lang['pt_BR']['Folder']['UNUSEDFILESTAB'] = 'Arquivos não utilizados';
$lang['pt_BR']['Folder']['UNUSEDFILESTITLE'] = 'Arquivos não utilizados';
$lang['pt_BR']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Miniaturas não utilizadas';
$lang['pt_BR']['Folder']['UPLOADTAB'] = 'Upload';
$lang['pt_BR']['Folder']['URL'] = 'URL';
$lang['pt_BR']['Folder']['VIEWASSET'] = 'Ver item';
$lang['pt_BR']['Folder']['VIEWEDITASSET'] = 'Ver/Editar Item';
$lang['pt_BR']['ForgotPasswordEmail.ss']['HELLO'] = 'Olá';
$lang['pt_BR']['ForgotPasswordEmail.ss']['TEXT1'] = 'Este é seu';
$lang['pt_BR']['ForgotPasswordEmail.ss']['TEXT2'] = 'link para reiniciar sua senha';
$lang['pt_BR']['ForgotPasswordEmail.ss']['TEXT3'] = 'para';
$lang['pt_BR']['Form']['DATENOTSET'] = '(Não foi colocada data)';
$lang['pt_BR']['Form']['FIELDISREQUIRED'] = '%s é requerido';
$lang['pt_BR']['Form']['LANGAOTHER'] = 'Outros idiomas';
$lang['pt_BR']['Form']['LANGAVAIL'] = 'Idiomas disponíveis';
$lang['pt_BR']['Form']['NOTSET'] = '(não foi colocado)';
$lang['pt_BR']['Form']['VALIDATIONALLDATEVALUES'] = 'Por favor assegure-se que inseriu todos os valores das datas';
$lang['pt_BR']['Form']['VALIDATIONBANKACC'] = 'Por favor insira um número bancário válido';
$lang['pt_BR']['Form']['VALIDATIONCREDITNUMBER'] = 'Por favor certifique-se que você escreveu seu número do cartão de crédito %s corretamente.';
$lang['pt_BR']['Form']['VALIDATIONFAILED'] = 'Falha na validação';
$lang['pt_BR']['Form']['VALIDATIONNOTUNIQUE'] = 'O valor inserido não é exclusivo';
$lang['pt_BR']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Senha não confere';
$lang['pt_BR']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'As Passwords não podem estar vazias';
$lang['pt_BR']['Form']['VALIDATIONSTRONGPASSWORD'] = 'As Passwords têm de ter pelo menos um dígito e um caracter alfanumérico';
$lang['pt_BR']['Form']['VALIDATOR'] = 'Verificador';
$lang['pt_BR']['Form']['VALIDCURRENCY'] = 'Por favor digite uma moeda válida.';
$lang['pt_BR']['FormField']['NONE'] = 'nenhum';
$lang['pt_BR']['GhostPage']['NOLINKED'] = 'Esta página fantasma não é linkada por nenhuma outra.';
$lang['pt_BR']['GhostPage']['PLURALNAME'] = 'Páginas fantasma';
$lang['pt_BR']['GhostPage']['SINGULARNAME'] = 'Página Fantasma';
$lang['pt_BR']['Group']['Code'] = 'Grupo de código';
$lang['pt_BR']['Group']['Description'] = 'Descrição';
$lang['pt_BR']['Group']['has_many_Permissions'] = 'Permissões';
$lang['pt_BR']['Group']['IPRestrictions'] = 'Restrição de endereços IP';
$lang['pt_BR']['Group']['Locked'] = 'Travado?';
$lang['pt_BR']['Group']['many_many_Members'] = 'Membros';
$lang['pt_BR']['Group']['Parent'] = 'Grupo pai';
$lang['pt_BR']['Group']['PLURALNAME'] = 'Grupos';
$lang['pt_BR']['Group']['SINGULARNAME'] = 'Grupo';
$lang['pt_BR']['Group']['Sort'] = 'Ordenação';
$lang['pt_BR']['GSTNumberField']['VALIDATION'] = 'Por favor digite um número GST válido';
$lang['pt_BR']['GSTNumberField']['VALIDATIONJS'] = 'Por favor entre com um numero de GTS válido';
$lang['pt_BR']['HtmlEditorField']['ALTTEXT'] = 'Descrição';
$lang['pt_BR']['HtmlEditorField']['ANCHOR'] = 'Inserir/editar âncora';
$lang['pt_BR']['HtmlEditorField']['ANCHORVALUE'] = 'Âncora';
$lang['pt_BR']['HtmlEditorField']['BULLETLIST'] = 'Lista normal';
$lang['pt_BR']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Alinhar ao centro';
$lang['pt_BR']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Justificado';
$lang['pt_BR']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Alinhar à esquerda';
$lang['pt_BR']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Alinhar à direita';
$lang['pt_BR']['HtmlEditorField']['BUTTONBOLD'] = 'Negrito (Ctrl+B)';
$lang['pt_BR']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Inserir Flash';
$lang['pt_BR']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Inserir imagem';
$lang['pt_BR']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Inserir link';
$lang['pt_BR']['HtmlEditorField']['BUTTONITALIC'] = 'Italico (Ctrl+I)';
$lang['pt_BR']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Remover link';
$lang['pt_BR']['HtmlEditorField']['BUTTONSTRIKE'] = 'riscado';
$lang['pt_BR']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Sublinhado (Ctrl+U)';
$lang['pt_BR']['HtmlEditorField']['CAPTION'] = 'Incluir descrições';
$lang['pt_BR']['HtmlEditorField']['CHARMAP'] = 'Inserir símbolo';
$lang['pt_BR']['HtmlEditorField']['CLOSE'] = 'fechar';
$lang['pt_BR']['HtmlEditorField']['COPY'] = 'Copiar (Ctrl+C)';
$lang['pt_BR']['HtmlEditorField']['CREATEFOLDER'] = 'Criar pasta';
$lang['pt_BR']['HtmlEditorField']['CSSCLASS'] = 'Alinhamento / estilo';
$lang['pt_BR']['HtmlEditorField']['CSSCLASSCENTER'] = 'Centralizado.';
$lang['pt_BR']['HtmlEditorField']['CSSCLASSLEFT'] = 'Na esquerda, com o texto ajustado.';
$lang['pt_BR']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Na esquerda de si mesmo.';
$lang['pt_BR']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Na direita, com o texto ajustado.';
$lang['pt_BR']['HtmlEditorField']['CUT'] = 'Cortar (Ctrl+X)';
$lang['pt_BR']['HtmlEditorField']['DELETECOL'] = 'Deletar coluna';
$lang['pt_BR']['HtmlEditorField']['DELETEROW'] = 'Excluir linha';
$lang['pt_BR']['HtmlEditorField']['EDITCODE'] = 'Alterar código HTML';
$lang['pt_BR']['HtmlEditorField']['EMAIL'] = 'Endereço de e-mail';
$lang['pt_BR']['HtmlEditorField']['FILE'] = 'Arquivo';
$lang['pt_BR']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['pt_BR']['HtmlEditorField']['FOLDER'] = 'Pasta';
$lang['pt_BR']['HtmlEditorField']['FOLDERCANCEL'] = 'cancelar';
$lang['pt_BR']['HtmlEditorField']['FORMATADDR'] = 'Endereço';
$lang['pt_BR']['HtmlEditorField']['FORMATH1'] = 'Título 1';
$lang['pt_BR']['HtmlEditorField']['FORMATH2'] = 'Título 2';
$lang['pt_BR']['HtmlEditorField']['FORMATH3'] = 'Título 3';
$lang['pt_BR']['HtmlEditorField']['FORMATH4'] = 'Título 4';
$lang['pt_BR']['HtmlEditorField']['FORMATH5'] = 'Título 5';
$lang['pt_BR']['HtmlEditorField']['FORMATH6'] = 'Título 6';
$lang['pt_BR']['HtmlEditorField']['FORMATP'] = 'Parágrafo';
$lang['pt_BR']['HtmlEditorField']['FORMATPRE'] = 'Pré-formatado';
$lang['pt_BR']['HtmlEditorField']['HR'] = 'Inserir linha horizontal';
$lang['pt_BR']['HtmlEditorField']['IMAGE'] = 'Imagem';
$lang['pt_BR']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensões';
$lang['pt_BR']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Altura';
$lang['pt_BR']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Largura';
$lang['pt_BR']['HtmlEditorField']['INDENT'] = 'Aumentar indentação';
$lang['pt_BR']['HtmlEditorField']['INSERTCOLAFTER'] = 'Inserir coluna depois';
$lang['pt_BR']['HtmlEditorField']['INSERTCOLBEF'] = 'Inserir coluna antes';
$lang['pt_BR']['HtmlEditorField']['INSERTROWAFTER'] = 'Inserir linha depois';
$lang['pt_BR']['HtmlEditorField']['INSERTROWBEF'] = 'Inserir linha antes';
$lang['pt_BR']['HtmlEditorField']['INSERTTABLE'] = 'Inserir tabela';
$lang['pt_BR']['HtmlEditorField']['LINK'] = 'Link';
$lang['pt_BR']['HtmlEditorField']['LINKANCHOR'] = 'Âncora nesta página';
$lang['pt_BR']['HtmlEditorField']['LINKDESCR'] = 'Descrição do link';
$lang['pt_BR']['HtmlEditorField']['LINKEMAIL'] = 'Endereço de e-mail';
$lang['pt_BR']['HtmlEditorField']['LINKEXTERNAL'] = 'Outro site';
$lang['pt_BR']['HtmlEditorField']['LINKFILE'] = 'Download de arquivo';
$lang['pt_BR']['HtmlEditorField']['LINKINTERNAL'] = 'Página no site';
$lang['pt_BR']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Abrir link em nova janela?';
$lang['pt_BR']['HtmlEditorField']['LINKTEXT'] = 'Texto de link';
$lang['pt_BR']['HtmlEditorField']['LINKTO'] = 'Link para';
$lang['pt_BR']['HtmlEditorField']['OK'] = 'ok';
$lang['pt_BR']['HtmlEditorField']['OL'] = 'Lista numerada';
$lang['pt_BR']['HtmlEditorField']['OUTDENT'] = 'Diminuir indentação';
$lang['pt_BR']['HtmlEditorField']['PAGE'] = 'Página';
$lang['pt_BR']['HtmlEditorField']['PASTE'] = 'Colar (Ctrl+V)';
$lang['pt_BR']['HtmlEditorField']['PASTETEXT'] = 'Colar como texto sem formatação';
$lang['pt_BR']['HtmlEditorField']['PASTEWORD'] = 'Colar do word';
$lang['pt_BR']['HtmlEditorField']['REDO'] = 'Refazer (Ctrl+Y)';
$lang['pt_BR']['HtmlEditorField']['SEARCHFILENAME'] = 'Procurar por nome de arquivo';
$lang['pt_BR']['HtmlEditorField']['SELECTALL'] = 'Selecionar tudo';
$lang['pt_BR']['HtmlEditorField']['UNDO'] = 'Voltar (Ctrl+Z)';
$lang['pt_BR']['HtmlEditorField']['UNLINK'] = 'Remover link';
$lang['pt_BR']['HtmlEditorField']['UPLOAD'] = 'upload';
$lang['pt_BR']['HtmlEditorField']['URL'] = 'URL';
$lang['pt_BR']['HtmlEditorField']['VISUALAID'] = 'Mostrar/esconder linhas-guia';
$lang['pt_BR']['Image']['PLURALNAME'] = 'Arquivos';
$lang['pt_BR']['Image']['SINGULARNAME'] = 'Arquivo';
$lang['pt_BR']['ImageField']['NOTEADDIMAGES'] = 'Você pode adicionar imagens depois que você salvar pela primeira vez.';
$lang['pt_BR']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Com armazenamento em arquivo';
$lang['pt_BR']['ImageUploader']['ATTACH'] = 'Anexar %s';
$lang['pt_BR']['ImageUploader']['DELETE'] = 'Remover %s';
$lang['pt_BR']['ImageUploader']['FROMCOMPUTER'] = 'De seu computador';
$lang['pt_BR']['ImageUploader']['FROMFILESTORE'] = 'Do repositório de arquivo';
$lang['pt_BR']['ImageUploader']['ONEFROMCOMPUTER'] = 'Qual de seu computador';
$lang['pt_BR']['ImageUploader']['REALLYDELETE'] = 'Deseja realmente remover este  %s?
';
$lang['pt_BR']['ImageUploader']['REPLACE'] = 'Substituir %s';
$lang['pt_BR']['Image_Cached']['PLURALNAME'] = 'Arquivos';
$lang['pt_BR']['Image_Cached']['SINGULARNAME'] = 'Arquivo';
$lang['pt_BR']['Image_iframe.ss']['TITLE'] = 'Upload de imagem';
$lang['pt_BR']['LoginAttempt']['Email'] = 'Endereço de E-mail';
$lang['pt_BR']['LoginAttempt']['IP'] = 'Endereço IP';
$lang['pt_BR']['LoginAttempt']['PLURALNAME'] = 'Tentativas de login';
$lang['pt_BR']['LoginAttempt']['SINGULARNAME'] = 'Tentativa de login';
$lang['pt_BR']['LoginAttempt']['Status'] = 'Status';
$lang['pt_BR']['Member']['ADDRESS'] = 'Endereço';
$lang['pt_BR']['Member']['belongs_many_many_Groups'] = 'Grupo';
$lang['pt_BR']['Member']['BUTTONCHANGEPASSWORD'] = 'Alterar Senha';
$lang['pt_BR']['Member']['BUTTONLOGIN'] = 'Entrar';
$lang['pt_BR']['Member']['BUTTONLOGINOTHER'] = 'Entrar com outro usuário';
$lang['pt_BR']['Member']['BUTTONLOSTPASSWORD'] = 'Esqueci minha senha';
$lang['pt_BR']['Member']['CONFIRMNEWPASSWORD'] = 'Confirme Nova Senha';
$lang['pt_BR']['Member']['CONFIRMPASSWORD'] = 'Confirme Senha';
$lang['pt_BR']['Member']['CONTACTINFO'] = 'Informação de Contato';
$lang['pt_BR']['Member']['db_LastVisited'] = 'Ultima data de visita';
$lang['pt_BR']['Member']['db_Locale'] = 'Interface de localização';
$lang['pt_BR']['Member']['db_LockedOutUntil'] = 'Bloqueado até';
$lang['pt_BR']['Member']['db_NumVisit'] = 'Numero de Visitantes';
$lang['pt_BR']['Member']['db_Password'] = 'Senha';
$lang['pt_BR']['Member']['db_PasswordExpiry'] = 'Data de expiração da senha';
$lang['pt_BR']['Member']['EMAIL'] = 'E-mail';
$lang['pt_BR']['Member']['EMAILSIGNUPINTRO1'] = 'Obrigado por se cadastrar e se tornar um membro, seus detalhes estão listados abaixo para referências futuras:';
$lang['pt_BR']['Member']['EMAILSIGNUPINTRO2'] = 'Você pode agora entrar no site usando as credenciais abaixo';
$lang['pt_BR']['Member']['EMAILSIGNUPSUBJECT'] = 'Obrigado por se cadastrar';
$lang['pt_BR']['Member']['ENTEREMAIL'] = 'Por favor, entre com seu enderenço de e-mail para receber o link de reinicialização de sua senha';
$lang['pt_BR']['Member']['ERRORLOCKEDOUT'] = 'Sua conta foi temporariamente bloqueada por muitas tentativas de acesso. Por favor, tente novamente em 20 minutos.';
$lang['pt_BR']['Member']['ERRORNEWPASSWORD'] = 'Você digitou sua nova senha incorretamente, tente novamente';
$lang['pt_BR']['Member']['ERRORPASSWORDNOTMATCH'] = 'Sua senha atual não confere, por favor tente novamente';
$lang['pt_BR']['Member']['ERRORWRONGCRED'] = 'Estes não parecem ser o e-mail e senha corretos. Por favor, tente novamente.';
$lang['pt_BR']['Member']['FIRSTNAME'] = 'Nome';
$lang['pt_BR']['Member']['GREETING'] = 'Bem vindo';
$lang['pt_BR']['Member']['INTERFACELANG'] = 'Idioma da interface';
$lang['pt_BR']['Member']['LOGGEDINAS'] = 'Você está loggado como %s.';
$lang['pt_BR']['Member']['MOBILE'] = 'Celular';
$lang['pt_BR']['Member']['NAME'] = 'Nome';
$lang['pt_BR']['Member']['NEWPASSWORD'] = 'Nova Senha';
$lang['pt_BR']['Member']['PASSWORD'] = 'Senha';
$lang['pt_BR']['Member']['PASSWORDCHANGED'] = 'Sua senha foi alterada e uma cópia foi enviada para o seu e-mail.';
$lang['pt_BR']['Member']['PERSONALDETAILS'] = 'Detalhes Pessoais';
$lang['pt_BR']['Member']['PHONE'] = 'Fone';
$lang['pt_BR']['Member']['PLURALNAME'] = 'Membros';
$lang['pt_BR']['Member']['PROFILESAVESUCCESS'] = 'Salvo com sucesso.';
$lang['pt_BR']['Member']['REMEMBERME'] = 'Lembrar de mim';
$lang['pt_BR']['Member']['SECURITYGROUPS'] = 'Grupo de segurança';
$lang['pt_BR']['Member']['SINGULARNAME'] = 'Membro';
$lang['pt_BR']['Member']['SUBJECTPASSWORDCHANGED'] = 'Sua senha foi alterada';
$lang['pt_BR']['Member']['SUBJECTPASSWORDRESET'] = 'Link para resetar sua senha';
$lang['pt_BR']['Member']['SURNAME'] = 'Sobrenome';
$lang['pt_BR']['Member']['USERDETAILS'] = 'Detalhes do usuário';
$lang['pt_BR']['Member']['VALIDATIONMEMBEREXISTS'] = 'Já existe um membro com este email';
$lang['pt_BR']['Member']['WELCOMEBACK'] = 'Seja bem-vindo de volta, %s';
$lang['pt_BR']['Member']['YOUROLDPASSWORD'] = 'Senha antiga';
$lang['pt_BR']['MemberAuthenticator']['TITLE'] = 'E-mail &amp; Senha';
$lang['pt_BR']['MemberPassword']['PLURALNAME'] = 'Senhas do Usuário';
$lang['pt_BR']['MemberPassword']['SINGULARNAME'] = 'Senha do Usuário';
$lang['pt_BR']['MyEntity']['MyNamespace'] = 'Valor padrão da lingua';
$lang['pt_BR']['MyNamespace']['MYENTITY'] = 'Foram contadas %s itens';
$lang['pt_BR']['NumericField']['VALIDATION'] = '\'%s\' não é um número, somente números são aceitos neste campo';
$lang['pt_BR']['NumericField']['VALIDATIONJS'] = 'não é um número, somente números neste campo';
$lang['pt_BR']['Page']['PLURALNAME'] = 'Páginas';
$lang['pt_BR']['Page']['SINGULARNAME'] = 'Página';
$lang['pt_BR']['Permission']['FULLADMINRIGHTS'] = 'Todos os direitos administrativos';
$lang['pt_BR']['Permission']['PERMSDEFINED'] = 'Os códigos de permissões a seguir foram setados';
$lang['pt_BR']['Permission']['PLURALNAME'] = 'Permissões';
$lang['pt_BR']['Permission']['SINGULARNAME'] = 'Persmissão';
$lang['pt_BR']['PhoneNumberField']['VALIDATION'] = 'Por favor digite um número de telefone válido';
$lang['pt_BR']['QueuedEmail']['PLURALNAME'] = 'Fila de emails';
$lang['pt_BR']['QueuedEmail']['SINGULARNAME'] = 'Fila de email';
$lang['pt_BR']['RedirectorPage']['HASBEENSETUP'] = 'Uma página de redireccionamento foi criada sem nenhum destino específicado';
$lang['pt_BR']['RedirectorPage']['HEADER'] = 'Esta página redireccionará os utilizadores para outra página';
$lang['pt_BR']['RedirectorPage']['OTHERURL'] = 'Outro website URL';
$lang['pt_BR']['RedirectorPage']['PLURALNAME'] = 'Páginas de redirecionamento';
$lang['pt_BR']['RedirectorPage']['REDIRECTTO'] = 'Redirecionar para';
$lang['pt_BR']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Outro website';
$lang['pt_BR']['RedirectorPage']['REDIRECTTOPAGE'] = 'Uma página no seu website';
$lang['pt_BR']['RedirectorPage']['SINGULARNAME'] = 'Página de redirecionamento';
$lang['pt_BR']['RedirectorPage']['YOURPAGE'] = 'Página no seu website';
$lang['pt_BR']['RelationComplexTableField.ss']['ADD'] = 'Incluir';
$lang['pt_BR']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Exportar para CSV';
$lang['pt_BR']['RelationComplexTableField.ss']['DELETE'] = 'excluir';
$lang['pt_BR']['RelationComplexTableField.ss']['EDIT'] = 'editar';
$lang['pt_BR']['RelationComplexTableField.ss']['NOTFOUND'] = 'nenhum item encontrado';
$lang['pt_BR']['RelationComplexTableField.ss']['SHOW'] = 'mostrar';
$lang['pt_BR']['SearchForm']['GO'] = 'Ir';
$lang['pt_BR']['SearchForm']['SEARCH'] = 'Buscar';
$lang['pt_BR']['Security']['ALREADYLOGGEDIN'] = 'Você não tem acesso a esta página. Se você tem outra conta que pode acessar esta página, você pode efetuar o login abaixo.';
$lang['pt_BR']['Security']['BUTTONSEND'] = 'Envie-me o link para resetar a senha';
$lang['pt_BR']['Security']['CHANGEPASSWORDBELOW'] = 'Você pode alterar sua senha abaixo.';
$lang['pt_BR']['Security']['CHANGEPASSWORDHEADER'] = 'Alterar sua senha';
$lang['pt_BR']['Security']['EMAIL'] = 'E-Mail:';
$lang['pt_BR']['Security']['ENCDISABLED1'] = 'Criptografia de senha desabilitada!';
$lang['pt_BR']['Security']['ENCDISABLED2'] = 'Para criptografar as suas senhas modifique os configurações das senhas adicionando ';
$lang['pt_BR']['Security']['ENCDISABLED3'] = 'em mysite/_config.php';
$lang['pt_BR']['Security']['ENCRYPT'] = 'Criptografar todas as senhas';
$lang['pt_BR']['Security']['ENCRYPTEDMEMBERS'] = 'Credenciais Criptografadas dos usuários &quot;';
$lang['pt_BR']['Security']['ENCRYPTWITH'] = 'As senhas serão criptografadas usando o algoritmo &quot;%s&quot;';
$lang['pt_BR']['Security']['ENCRYPTWITHOUTSALT'] = 'sem o tempero para incrementar a segurança.';
$lang['pt_BR']['Security']['ENCRYPTWITHSALT'] = 'como um tempero para incrementar a segurança.';
$lang['pt_BR']['Security']['ENTERNEWPASSWORD'] = 'Por favor entre uma nova senha.';
$lang['pt_BR']['Security']['ERRORPASSWORDPERMISSION'] = 'Você precisa estar logado para alterar sua senha!';
$lang['pt_BR']['Security']['ID'] = 'ID:';
$lang['pt_BR']['Security']['IPADDRESSES'] = 'Endereço IP';
$lang['pt_BR']['Security']['LOGGEDOUT'] = 'Você saiu do sistema. Se você gostaria de entrar novamente, digite suas credenciais abaixo';
$lang['pt_BR']['Security']['LOGIN'] = 'Entrar';
$lang['pt_BR']['Security']['LOSTPASSWORDHEADER'] = 'Senha perdida';
$lang['pt_BR']['Security']['NOTEPAGESECURED'] = 'Esta página é protegida. Digite suas credenciais abaixo para continuar.';
$lang['pt_BR']['Security']['NOTERESETLINKINVALID'] = '<p> O link de reinicialização da senha é invalido ou expirado.</p><p>Você pode requisitar um novo <a href="%s">aqui</a> ou mudar sua senha após <a href="%s">logado</a></p>';
$lang['pt_BR']['Security']['NOTERESETPASSWORD'] = 'Digite seu endereço de e-mail e nós mandaremos a você um link com o qual você pode resetar sua senha';
$lang['pt_BR']['Security']['NOTHINGTOENCRYPT1'] = 'nenhuma senha para ser criptografada';
$lang['pt_BR']['Security']['NOTHINGTOENCRYPT2'] = 'Não existe usuário com senha que pode ser criptografado!';
$lang['pt_BR']['Security']['PASSWORDSENTHEADER'] = 'Link para resetar senha enviado para \'%s\'';
$lang['pt_BR']['Security']['PASSWORDSENTTEXT'] = 'Obrigado! O link para resetar a senha foi enviado para \'%s\'.';
$lang['pt_BR']['Security']['PERMFAILURE'] = 'Esta página é segura e você precisa de direitos de administrador para acessa-la. Entre com suas credenciais abaixo para ter acesso ao conteúdo.';
$lang['pt_BR']['SecurityAdmin']['ADVANCEDONLY'] = 'Esta área é apenas para usuários avançados. Veja <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">esta página</a>
para mais informações.';
$lang['pt_BR']['SecurityAdmin']['CODE'] = 'Código';
$lang['pt_BR']['SecurityAdmin']['GROUPNAME'] = 'Nome do grupo';
$lang['pt_BR']['SecurityAdmin']['IPADDRESSESHELP'] = '<p> Você pode restringir este grupo a uma escalade de endereço IP privado(um por linha)<br/> Estas escalas podem ser em qualque um dos formatos: <br>
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />
se você entrar com um ou mais escalas de endereços no campo, os usuários só poderão acessar o grupo de se eles estiverem logados com um endereço IP válido. Isto não impede de as pessoas de se logar. Isto é devia a possibilidade de o usuário possa  acessar partes do site que não tenho restrição de endereço IP.';
$lang['pt_BR']['SecurityAdmin']['MEMBERS'] = 'Membros';
$lang['pt_BR']['SecurityAdmin']['OPTIONALID'] = 'ID opcional';
$lang['pt_BR']['SecurityAdmin']['PERMISSIONS'] = 'Permissões';
$lang['pt_BR']['SecurityAdmin']['VIEWUSER'] = 'Ver Usuario';
$lang['pt_BR']['SimpleImageField']['NOUPLOAD'] = 'Não foi feito o upload de nenhuma imagem';
$lang['pt_BR']['SiteTree']['ACCESSANYONE'] = 'Qualquer pessoa';
$lang['pt_BR']['SiteTree']['ACCESSHEADER'] = 'Quem pode ver esta página?';
$lang['pt_BR']['SiteTree']['ACCESSLOGGEDIN'] = 'Utilizadores que tenham feito log-in';
$lang['pt_BR']['SiteTree']['ACCESSONLYTHESE'] = 'Somente estas pessoas (escolha da lista)';
$lang['pt_BR']['SiteTree']['ADDEDTODRAFT'] = 'Adicionado ao rascunho do site';
$lang['pt_BR']['SiteTree']['ALLOWCOMMENTS'] = 'Permitir comentários sobre esta página?';
$lang['pt_BR']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Este conteúdo também aparece nas páginas virtuais nas scções %s.';
$lang['pt_BR']['SiteTree']['BUTTONCANCELDRAFT'] = 'Cancelar alterações no rascunho';
$lang['pt_BR']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Apague o seu rascunho e reverta para o site currrentement publicado';
$lang['pt_BR']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Salvar e Publicar';
$lang['pt_BR']['SiteTree']['BUTTONUNPUBLISH'] = 'Anular publicação';
$lang['pt_BR']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Remova esta página do site publicado';
$lang['pt_BR']['SiteTree']['CHANGETO'] = 'Trocar para "%s"';
$lang['pt_BR']['SiteTree']['Comments'] = 'Comentários';
$lang['pt_BR']['SiteTree']['Content'] = 'Conteúdo';
$lang['pt_BR']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Você pode alimentar esta página com seu próprio conteúdo, ou excluir esta página e criar as suas proprias.<br /></p>';
$lang['pt_BR']['SiteTree']['DEFAULTABOUTTITLE'] = 'Sobre nós';
$lang['pt_BR']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Você pode alimentar esta página com seu próprio conteúdo, ou excluir esta página e criar as suas proprias.<br /></p>';
$lang['pt_BR']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Contato';
$lang['pt_BR']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Bem vindo ao SilverStripe! Esta é a página padrão de entrada. Você pode editar esta página abrindo o <a href="admin/">a area de administração CMS</a>. Você pode acessar a <a href="http://doc.silverstripe.com"> documentação do desenvolvedor</a>, ou começar <a href="http://doc.silverstripe.com/doku.php?id=tutorials">com os tutoriais.</a></p>';
$lang['pt_BR']['SiteTree']['DEFAULTHOMETITLE'] = 'Página Inicial';
$lang['pt_BR']['SiteTree']['EDITANYONE'] = 'Qualquer pessoa que possa fazer log-in';
$lang['pt_BR']['SiteTree']['EDITHEADER'] = 'Quem pode editar esta página?';
$lang['pt_BR']['SiteTree']['EDITONLYTHESE'] = 'Somente estas pessoas (escolha da lista)';
$lang['pt_BR']['SiteTree']['Editors'] = 'Grupo de editores';
$lang['pt_BR']['SiteTree']['GROUP'] = 'Grupo';
$lang['pt_BR']['SiteTree']['HASBROKENLINKS'] = 'Esta página tem links quebrados.';
$lang['pt_BR']['SiteTree']['has_one_Parent'] = 'Página mãe';
$lang['pt_BR']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domínio(s)';
$lang['pt_BR']['SiteTree']['HomepageForDomain'] = 'Página inicial deste dominio';
$lang['pt_BR']['SiteTree']['HTMLEDITORTITLE'] = 'Conteúdo';
$lang['pt_BR']['SiteTree']['INHERIT'] = 'Herdar da página mãe';
$lang['pt_BR']['SiteTree']['many_many_BackLinkTracking'] = 'Gerenciar Backlink ';
$lang['pt_BR']['SiteTree']['many_many_ImageTracking'] = 'Gerenciar Imagem';
$lang['pt_BR']['SiteTree']['many_many_LinkTracking'] = 'Gerenciar Link';
$lang['pt_BR']['SiteTree']['MENUTITLE'] = 'Rótulo da navegação';
$lang['pt_BR']['SiteTree']['METADESC'] = 'Descrição';
$lang['pt_BR']['SiteTree']['METAEXTRA'] = 'Meta tags personalizadas';
$lang['pt_BR']['SiteTree']['METAHEADER'] = 'Meta-tags para Motores de Busca';
$lang['pt_BR']['SiteTree']['METAKEYWORDS'] = 'Palavras-chave';
$lang['pt_BR']['SiteTree']['METATITLE'] = 'Título';
$lang['pt_BR']['SiteTree']['MODIFIEDONDRAFT'] = 'Modificado no rascunho do site';
$lang['pt_BR']['SiteTree']['NOBACKLINKS'] = 'Não existe nehuma página que tenha link para esta página';
$lang['pt_BR']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Usar esta página como \'home page\' para os seguintes domínios (separar domínios com virgulas)';
$lang['pt_BR']['SiteTree']['PAGESLINKING'] = 'As segunintes páginas têm link para esta página:';
$lang['pt_BR']['SiteTree']['PAGETITLE'] = 'Nome da Página';
$lang['pt_BR']['SiteTree']['PAGETYPE'] = 'Tipo de página';
$lang['pt_BR']['SiteTree']['PARENTID'] = 'Página pai';
$lang['pt_BR']['SiteTree']['PARENTTYPE'] = 'Lugar da página';
$lang['pt_BR']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'Controla os grupos que podem acessar ou editar determinadas páginas';
$lang['pt_BR']['SiteTree']['PLURALNAME'] = 'Mapa dos Sites';
$lang['pt_BR']['SiteTree']['REMOVEDFROMDRAFT'] = 'Removido do reacunho do site';
$lang['pt_BR']['SiteTree']['SHOWINMENUS'] = 'Mostrar nos menus?';
$lang['pt_BR']['SiteTree']['SHOWINSEARCH'] = 'Uncluir na procura?';
$lang['pt_BR']['SiteTree']['SINGULARNAME'] = 'Mapa do Site';
$lang['pt_BR']['SiteTree']['TABACCESS'] = 'Acesso';
$lang['pt_BR']['SiteTree']['TABBACKLINKS'] = 'Backlinks';
$lang['pt_BR']['SiteTree']['TABBEHAVIOUR'] = 'Comportamento';
$lang['pt_BR']['SiteTree']['TABCONTENT'] = 'Conteúdo';
$lang['pt_BR']['SiteTree']['TABMAIN'] = 'Principal';
$lang['pt_BR']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['pt_BR']['SiteTree']['TABREPORTS'] = 'Relatórios';
$lang['pt_BR']['SiteTree']['ToDo'] = 'Nota do \'A fazer\'';
$lang['pt_BR']['SiteTree']['TODOHELP'] = '<p> Você pode utilizar esta área gerenciar os itens que precisam ser feitos para o seu site. Pra ver todas as suas páginas com itens a serem feitos, abra a janela \'Relatório do site\' no lado esquerdo e selecione \'A fazer\'</p>';
$lang['pt_BR']['SiteTree']['TOPLEVEL'] = 'Conteúdo do Site (Top Level)';
$lang['pt_BR']['SiteTree']['URL'] = 'URL';
$lang['pt_BR']['SiteTree']['URLSegment'] = 'URL da página';
$lang['pt_BR']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Existe outra página que está a usar este URL. O URL tem de ser único para cada página.';
$lang['pt_BR']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URLs só podem conter letras, dígitos e hyphens.';
$lang['pt_BR']['SiteTree']['Viewers'] = 'Grupo de visualizadores';
$lang['pt_BR']['TableField']['ISREQUIRED'] = 'Em %s \'%s\' é obrigatório.';
$lang['pt_BR']['TableField.ss']['ADD'] = 'Incluir nova linha';
$lang['pt_BR']['TableField.ss']['CSVEXPORT'] = 'Exportar para CSV';
$lang['pt_BR']['TableListField']['CSVEXPORT'] = 'Exportar para CSV';
$lang['pt_BR']['TableListField']['PRINT'] = 'Imprimir';
$lang['pt_BR']['TableListField_PageControls.ss']['DISPLAYING'] = 'Mostrando';
$lang['pt_BR']['TableListField_PageControls.ss']['OF'] = 'de';
$lang['pt_BR']['TableListField_PageControls.ss']['TO'] = 'para';
$lang['pt_BR']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Ver primeiro';
$lang['pt_BR']['TableListField_PageControls.ss']['VIEWLAST'] = 'Ver ultimo';
$lang['pt_BR']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Ver próximo';
$lang['pt_BR']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Ver anterior';
$lang['pt_BR']['ToggleCompositeField.ss']['HIDE'] = 'Ocultar';
$lang['pt_BR']['ToggleCompositeField.ss']['SHOW'] = 'Exibir';
$lang['pt_BR']['ToggleField']['LESS'] = 'menos';
$lang['pt_BR']['ToggleField']['MORE'] = 'mais';
$lang['pt_BR']['Translatable']['CREATE'] = 'Criar nova tradução';
$lang['pt_BR']['Translatable']['CREATEBUTTON'] = 'Criar';
$lang['pt_BR']['Translatable']['EXISTING'] = 'Traduções existentes:';
$lang['pt_BR']['Translatable']['NEWLANGUAGE'] = 'nova linguagem';
$lang['pt_BR']['Translatable']['TRANSLATIONS'] = 'Traduções';
$lang['pt_BR']['TreeSelectorField']['CANCEL'] = 'cancelar';
$lang['pt_BR']['TreeSelectorField']['SAVE'] = 'salvar';
$lang['pt_BR']['TypeDropdown']['NONE'] = 'Nenhum';
$lang['pt_BR']['Versioned']['has_many_Versions'] = 'Versões';
$lang['pt_BR']['VirtualPage']['CHOOSE'] = 'Escolha uma página para fazer link';
$lang['pt_BR']['VirtualPage']['EDITCONTENT'] = 'clique aqui para editar o conteúdo';
$lang['pt_BR']['VirtualPage']['HEADER'] = 'Esta é uma página virtual';
$lang['pt_BR']['VirtualPage']['PLURALNAME'] = 'Páginas virtuais';
$lang['pt_BR']['VirtualPage']['SINGULARNAME'] = 'Página virtual';
$lang['pt_BR']['Widget']['PLURALNAME'] = 'Widgets';
$lang['pt_BR']['Widget']['SINGULARNAME'] = 'Widget';
$lang['pt_BR']['WidgetArea']['PLURALNAME'] = 'Áreas de Widget';
$lang['pt_BR']['WidgetArea']['SINGULARNAME'] = 'Área de Widget';

?>