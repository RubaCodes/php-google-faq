<?php

$faqs = [
    [
        'title' => "<h2>How are you implementing the recent Court of Justice of the European Union(CJEU) decision on the right to be forgotten?</h2>",
        'article' => "<p>
  The recent
  <a
    href=" . "http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=en&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332" .
            ">ruling by the Court of Justice of the European Union</a
  >
  has profound consequences for search engines in Europe. The court found that
  certain users have the right to ask search engines like Google to remove
  results for queries that include the person ’s name. To qualify, the results
  shown would need to be inadequate, irrelevant, no longer relevant, or
  excessive.
</p>
<p>
  Since this ruling was published on 13 May 2014, we’ve been working round the
  clock to comply. This is a complicated process because we need to assess each
  individual request and balance the rights of the individual to control his or
  her personal data with public’s right to know and distribute information.
</p>
<p>
  If you have a removal request, please fill out this
  <a
    href=" . "https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=en" .
            ">webform</a
  >. You’ll receive an automatic reply confirming that we have received your
  request. We will then assess your case—please note this may take some time
  because we have already received many such requests. In evaluating your
  request, we will look at whether the results include outdated information
  about your private life. We’ll also look at whether there’s a public interest
  in the information remaining in our search results—for example, if it relates
  to financial scams, professional malpractice, criminal convictions or your
  public conduct as a government official (elected or unelected). These are
  difficult judgements and as a private organization, we may not be in a good
  position to decide on your case. If you disagree with our decision you can
  contact your local DPA.
</p>
<p>
  We look forward to working closely with data protection authorities and others
  over the coming months as we refine our approach. The CJEU’s ruling
  constitutes a significant change for search engines. While we are concerned
  about its impact, we also believe it’s important to respect the Court’s
  judgment and are working hard to devise a process that complies with the law.
</p>
<p>
  When you search for a name, you may see a notice that says that results may
  have been modified in accordance with data protection law in Europe. We’re
  showing this notice in Europe when a user searches for most names, not just
  pages that have been affected by a removal.
</p>"
    ],
    [
        'title' => "<h2>How does Google protect my privacy and keep my information secure?</h2>",
        'article' => "<p>
  We know security and privacy are important to you – and they are important to
  us, too. We make it a priority to provide strong security and give you
  confidence that your information is safe and accessible when you need it.
</p>
<p>
  We’re constantly working to ensure strong security, protect your privacy, and
  make Google even more effective and efficient for you. We spend hundreds of
  millions of dollars every year on security, and employ world-renowned experts
  in data security to keep your information safe. We also built easy-to-use
  privacy and security tools like Google Dashboard, 2-step verification and Ads
  Settings. So when it comes to the information you share with Google, you’re in
  control.
</p><p>
  You can learn more about safety and security online, including how to protect
  yourself and your family online, at the
  <a href=" . "https://www.google.com/safetycenter/?hl=en_US" .
            ">Google Safety Center</a
  >.
</p>
<p>
  <a href=" . "https://privacy.google.com?hl=en_US" . ">Learn more</a> about how we keep
  your personal information private and safe — and put you in control.
</p>"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>\
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
    <title>Google faq</title>
</head>

<body>
    <div class="container">
        <?php foreach ($faqs as $faq) {
            echo $faq['title'];
            echo $faq['article'];
        } ?>
    </div>
</body>

</html>