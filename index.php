<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Google FAQs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<?php
    $faqs = [
        [
            'question' => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
            'answer' => "The recent <a href=\"https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=en&mode=lst&dir=&occ=first&part=1&cid=276332\">ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.
                        Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.
                        If you have a removal request, please fill out this <a href=\"https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637656606612471789-2559957686&hl=en-GB&rd=1\">web form</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.
                        We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.
                        When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal."
        ],

        [
            'question' => "How does Google protect my privacy and keep my information secure?",
            'answer' => "We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.
                        We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.
                        You can find out more about safety and security online, including how to protect yourself and your family online, at the <a href=\"https://safety.google/\">Google Safety Centre</a>.
                        <a href=\"https://safety.google/\">Find out more</a> about how we keep your personal information private and safe – and put you in control."
        ],

        [
            'question' => "Why is my account associated with a country?",
            'answer' => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:
                        <ol>
                        <li>The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
                            <ol class=\"inner\" type=\"a\">
                            <li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li>
                            <li>Google LLC, based in the United States, for the rest of the world</li></ol>
                        </li>
                        <li>The version of the terms that govern our relationship, which can vary depending on local laws</li></ol>
                        Keep in mind that Google services are essentially the same, regardless of the affiliate that provides the services or your country association.
                        <h3>Determining the country associated with your account</h3>
                        When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services – typically where you’ve spent the most time in the last year.
                        Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.
                        If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think that your country association is wrong."
        ],

        [
            'question' => "How can I remove information about myself from Google’s search results?",
            'answer' => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <a href=\"https://support.google.com/websearch/answer/9109?hl=en-GB\">contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <a href=\"https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637656610667188231-2515788316&hl=en-GB&rd=1\">click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <a href=\"https://support.google.com/websearch/troubleshooter/3111061?hl=en-GB\">visit our help page for more information</a>."
        ],

        [
            'question' => "Are my search queries sent to websites when I click on Google Search results?",
            'answer' => "In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a href=\"https://policies.google.com/privacy/key-terms#toc-terms-http\">Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a href=\"https://support.google.com/websearch/answer/173733\">here</a>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click."
        ]
    ];
?>

<body>
    <div class="container">
        <header>
            <div class="logoAccount">
                <div class="logo">
                    <img src="./img/Google FAQ.png" alt="">
                </div>
                <div class="accountDetails">
                    <img src="./img/Dots.png" alt="">
                    <i class="account fas fa-user"></i>
                </div>
            </div>

            <div class="nav">
                <ul>
                    <li>Overview</li>
                    <li>Privacy Policy</li>
                    <li>Terms of Service</li>
                    <li>Technologies</li>
                    <li class="selected">FAQ</li>
                </ul>
            </div>
        </header>

        <main>

            <?php foreach ($faqs as $faq) {
                echo "<button class=\"accordionQ\"><h2>{$faq['question']}</h2></button>";
                $faq['answer'] = str_replace("\n", "</p><p>", $faq['answer']);
                echo "<div class=\"accordionA\"><p>{$faq['answer']}</p></div>";
            };
            ?>

        </main>

        <footer>
            <div class="innerFooter">
                <ul>
                    <li>Google</li>
                    <li>About Google</li>
                    <li>Privacy</li>
                    <li>Terms</li>
                </ul>
                <select name="language" id="lang">
                    <option value="none">Select language...</option>
                    <option value="english">English</option>
                    <option value="italian">Italiano</option>
                    <option value="german">Deutsch</option>
                </select>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
