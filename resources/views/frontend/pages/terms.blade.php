@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))
@section('meta_title', appName() . ' | ' . __('Terms & Conditions'))
@section('meta_description', appName() . ' | ' . __('Terms & Conditions'))

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <x-frontend.card>
                <x-slot name="header">
                    <h1 class="text-center w-100 my-2"><span>@lang('Terms & Conditions')</span></h1>
                </x-slot>

                <x-slot name="body">
                    <p>非常歡迎您光臨「純靠北工程師」，<a href="https://init.engineer">init.engineer</a>（以下簡稱本網站）為<a href="https://github.com/Kantai235"> 乾太 ₍₍ ◝(･◡･)◟ ⁾⁾ </a>所經營管理之網路平台，為了讓您能夠安心使用平台上的各項服務與資訊，特此向您說明本網站的隱私權保護政策（以下簡稱本政策），以保障您的權益，請您詳閱下列內容，並確實遵守，謝謝。</p>

                    <h3>壹、隱私權保護政策的適用範圍</h3>
                    <ul>
                        <li>本政策所涵蓋知範圍包括本網站所向您蒐集到的個人識別資料及後續之利用、處理行為，包含：使用者名稱、年齡、性別、通訊地址、Email 與聯絡電話，或其他您註冊時或其後所同意本網站蒐集之個人資訊。</li>
                        <li>本政策之效力範圍僅及於本網站，若您點選第三人網站之連結或廣告，亦如另行登入 Line、Facebook、GitHub、BitBucket、Google、LinkedIn、Twitter、Tumblr、Discord、Telegram，或 Instagram 平台後的互動，依個別平台與使用者另訂的隱私條款，本網站的隱私政策也不適用於非本網站所委託或參與管理的人員。</li>
                        <li>於您使用本網站所提供之服務或註冊本網站會員時，即表示您同意並能確實遵守本政策所列全部條款，且授權本網站蒐集、利用您的個人資料，若您不同意全部或部分條款內容，則請勿使用本網站服務。</li>
                    </ul>

                    <h3>貳、Cookie、個人資料的蒐集、處理及利用方式</h3>
                    <ul>
                        <li>當您造訪本網站或使用本網站所提供之功能服務時，我們將視該服務功能性質，請您提供必要的個人資料，並在該特定目的範圍內處理及利用您的個人資料；非經您書面同意，本網站不會將個人資料用於其他用途。</li>
                        <li>當您造訪網站並同意網站使用條款後，於一般瀏覽時，若您未於網路環境自設資訊屏蔽機制，本網站伺服器會自行記錄相關行徑，包括您使用連線設備的 IP 位址、瀏覽器類型、瀏覽器語言、使用時間、瀏覽及點選資料記錄，以及一或多個能夠正確識別您瀏覽器的 Cookie。</li>
                        <li>本網站在您使用服務信箱、問卷調查等互動性功能時，會保留您所提供的姓名、電子郵件地址、聯絡方式及使用時間等。</li>
                        <li>為了提供您最佳的服務，本網站會在您的電腦中放置並取用暫存性的 Cookie，廣告 Cookie 用於行銷目的，提供行為／目標廣告的數據追蹤，網站能更精確地符合使用者的需求。透過標記收集的資訊可能會連結至使用者行為，但是無法辨識您的身分。這些紀錄資料將以匿名方式處理，在完全妥善去識別化處理的前提下，做為我們增進網站服務、維持系統安全性的參考依據。</li>
                        <li>於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的 IP 位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，決不對外公佈。</li>
                        <li>為提供精確的服務，我們會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研究外，我們會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。</li>
                        <li>若您不願接受 Cookie 的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕 Cookie 的寫入，但可能會導至網站某些功能無法正常執行；或您亦可開啟瀏覽器之隱私模式，以中斷該等資訊被獲取之權限。</li>
                    </ul>

                    <h3>參、資料之保護</h3>
                    <ul>
                        <li>本網站主機均設有防火牆、防毒系統等相關的各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，相關處理人員皆簽有保密合約，如有違反保密義務者，將會受到相關的法律處分。</li>
                        <li>如因業務需要有必要委託其他單位提供服務時，本網站亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其將確實遵守。</li>
                    </ul>

                    <h3>肆、資料分享與揭露</h3>
                    <p> 除非符合下列其中一種情況，否則我們不會與本網站以外的服務、機構或個人分享您的個人資訊：</p>
                    <ul>
                        <li><strong>服務供應商：</strong>為了讓所有產品或服務能順利運作，我們會與雲端資訊服務供應商合作，包括：雲端運算與資料儲存平台、電子報發報系統、電子商務平台、金流平台等服務。</li>
                        <li>
                            <strong>合作夥伴：</strong>
                            <ul>
                                <li>為改善服務，我們會與第三方的數據分析服務合作，如：Google Analytics、Cloudflare Web Analytics，提供您更優質的使用者體驗。</li>
                                <li>此外，亦會藉由 Facebook Ads、Google Ads 提供的服務作為再行銷（Retargeting）廣告之用，即您曾經在本網站網頁瀏覽過的內容，將會在 Facebook 上以廣告的方式重新呈現給您。</li>
                                <li>為了投放您所感興趣的廣告，與國內外廣告商合作，如：Google、OneAD 等。關於各廣告商的隱私權政策，請參考各廣告商網站。</li>
                                <li>為提供您其他服務或優惠時，如：各廣告主所主辦之活動、網路調查或抽獎活動，需與提供該服務或優惠之第三者共用您的資料。本網站會在活動時提供充分說明給您，並且在資料提供之前通知您，您可以自由選擇是否接受這項特定服務或優惠。</li>
                            </ul>
                        </li>
                        <li><strong>平台所有權變更：</strong>若涉及本網站（無論整體或部分）合併、銷售、收購、撤資、重組、改組、解散、破產或網站所有權或控制權的其他變更時，我們會在發布相關公告以及透過您留下的電子聯繫方式通知您後，移轉您的資訊。</li>
                        <li>
                            <strong>執法機關與資料保護主管機關：</strong>依據法律要求，在合理必要的情況下，我們可以披露您的資訊：
                            <ul>
                                <li>為了遵守法律程序，例如法院命令、傳票或搜索票、配合政府/執法調查或其他法律要求。</li>
                                <li>為了協助預防或偵查犯罪（每一個案依據適用法律）。</li>
                                <li>為了保障任何人的安全。</li>
                                <li>就非法活動、涉嫌詐騙或其他不法行為進行調查、採取預防措施或其他行動。</li>
                            </ul>
                        </li>
                        <li><strong>投稿：</strong>若您投稿至本網站網站並獲得刊登，您的姓名、職業、著作將在經您同意分享的情況下，公開在您投稿的文章網頁上。</li>
                    </ul>

                    <h3>伍、網站對外的相關連結</h3>
                    <p>本網站的網頁提供其他網站的網路連結，例如 Line、Facebook、GitHub、BitBucket、Google、LinkedIn、Twitter、Tumblr、Discord、Telegram，或 Instagram 等外部平台，您也可經由本網站所提供的連結，點選進入其他網站。但該連結網站不適用本網站的隱私權保護政策，您必須參考該連結網站個別訂立的隱私權保護政策。</p>

                    <h3>陸、與第三人共用個人資料之政策</h3>
                    <p>本網站絕不會提供、交換、出租或出售任何您的個人資料給其他個人、團體、私人企業或公務機關，但有法律依據或合約義務者，不在此限。</p>
                    <p>前項但書之情形包括不限於：</p>
                    <ul>
                        <li>經由您書面同意。</li>
                        <li>法律明文規定。</li>
                        <li>為免除您生命、身體、自由或財產上之危險。</li>
                        <li>與公務機關或學術研究機構合作，基於公共利益為統計或學術研究而有必要，且資料經過提供者處理或蒐集著依其揭露方式無從識別特定之當事人。</li>
                        <li>提供您的個人資料予協助本網站及相關服務之行政、物流、郵寄、電訊、電腦、資料處理、資安、行銷及金流、支付等一切相關廠商。</li>
                        <li>當您在網站的行為，違反服務條款或可能損害或妨礙網站與其他使用者權益或導致任何人遭受損害時，經網站管理單位研析揭露您的個人資料是為了辨識、聯絡或採取法律行動所必要者。</li>
                        <li>有利於您的權益。</li>
                        <li>本網站委託廠商協助蒐集、處理或利用您的個人資料時，將對委外廠商或個人善盡監督管理之責。</li>
                    </ul>

                    <h3>柒、Cookie 或類似技術之使用</h3>
                    <p>為了提供您最佳的服務，本網站會在您的電腦中放置並取用我們的 Cookie 或類似技術，若您不願接受 Cookie 或類似技術的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕 Cookie 或類似技術的寫入，但可能會導至網站某些功能無法正常執行。</p>

                    <h3>捌、隱私權保護政策之修正</h3>
                    <p>本網站隱私權保護政策將因應需求隨時進行修正，修正後的條款將更新於網站上。</p>

                    <h3>玖、如何聯繫我們</h3>
                    <p>若您對於本網站之隱私權保護政策或與您個人資料有關事項有任何疑問或建議，或是您的資料遭到盜用或有其他任何安全問題發生時，請與管理員聯繫：<a href="mailto:kantai.developer@gmail.com">kantai.developer@gmail.com</a></p>

                    <h3>拾、個人資料的刪除</h3>
                    <p>如果您希望移除所有在本網站留有的帳號資訊，並不再使用本網站的服務，請寄信至管理員信箱(<a href="mailto:kantai.developer@gmail.com">kantai.developer@gmail.com</a>)提供以下資訊：</p>
                    <ul>
                        <li>使用者 Email（登入網站後可於個人資訊中取得）。</li>
                        <li>說明您想提出「刪除帳號」的請求，並理解刪除帳號後將無法恢復以往的紀錄，也無法再透過本網站註冊相同的帳號。</li>
                    </ul>
                    <p>我們將於收到請求的五到十個工作天內回覆並且執行您的請求。</p>
                </x-slot>
            </x-frontend.card>
        </div>
        <!--col-md-10-->
    </div>
    <!--row-->
</div>
<!--container-->
@endsection