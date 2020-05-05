<?php return array (
  'emails.orcidCollectAuthorId.subject' => 'ORCID da submissão',
  'emails.orcidCollectAuthorId.body' => 'Prezada(o) {$authorName},

Você foi listada(o) como um coautor(a) em uma submissão de manuscrito "{$submissionTitle}" para {$contextName}.

Para confirmar sua autoria, por favor adicione sua id ORCID a esta submissão, visitando o link fornecido abaixo.

{$authorOrcidUrl}

Se você tiver quaisquer dúvidas, por favor entre em contato comigo.

{$editorialContactSignature}


',
  'emails.orcidCollectAuthorId.description' => 'Este modelo de e-mail é utilizado para coletar os id ORCID dos coautores.',
);