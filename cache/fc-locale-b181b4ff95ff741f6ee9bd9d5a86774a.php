<?php return array (
  'emails.orcidCollectAuthorId.subject' => 'تقديم ORCID',
  'emails.orcidCollectAuthorId.body' => '>عزيزنا {$authorName}،<br/>
<br/>
لقد تم إدراجك بمثابة مؤلف مشارك في عمل مقدم إلى {$contextName}.<br/>
لتأكيد مصادقتك، لطفاً، أضف رمزك التعريفي في ORCID إلى طلب التقديم هذا عبر زيارة الرابط أدناه.<br/>
<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>إفتح حساباً أو ضع رمزك في ORCID</a><br/>
<br/>
<br/>
<a href="{$orcidAboutUrl}">المزيد مع المعلومات عن ORCID في {$contextName}</a><br/>
<br/>
إذا كانت لديك أي استفسارات، رجاءً، لا تتردد في مراسلتي.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.description' => 'قالب الرسالة هذا يستعمل لجمع الرموز التعريفية في ORCID من المؤلفين المشاركين.',
  'emails.orcidRequestAuthorAuthorization.subject' => 'إلتماس الوصو إلى حساب ORCID',
  'emails.orcidRequestAuthorAuthorization.body' => 'عزيزنا {$authorName}،<br>
<br>
لقد تم إدراجك بمثابة مؤلف مشارك في العمل الموسوم "{$submissionTitle}" والمقدم إلى {$contextName}.
<br>
<br>
نلتمس منح الموافقة على إضافة رمزك في ORCID إلى طلب التقديم هذا وكذلك إضافة هذا الطلب إلى ملفك الشخصي في ORCID عند النشر.<br>
قم بزيارة الرابط الرسمي لموقع ORCID، وسجل دخولك فيه ثم أجرِ ما يلزم لتفويضنا عبر اتباع التعليمات الآتية:<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="إيقونة رمز ORCID" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>إفتح حساباً أو ضع رمزك في ORCID</a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">المزيد مع المعلومات عن ORCID في {$contextName}</a><br/>
<br>
إذا كانت لديك أي استفسارات، رجاءً، لا تتردد في مراسلتي.<br>
<br>
{$principalContactSignature}<br>
',
  'emails.orcidRequestAuthorAuthorization.description' => 'قالب الرسالة هذا يستعمل لمطالبة المؤلفين المشاركين بالسماح لنا في الوصول إلى رموزهم التعريفية في ORCID.',
);