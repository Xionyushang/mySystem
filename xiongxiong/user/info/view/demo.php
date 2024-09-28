<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f0f2f5;
    }

    .profile-page {
        max-width: 900px;
        margin: 0 auto;
        background-color: white;
        border: 1px solid #dddfe2;
        border-radius: 8px;
    }

    .header {
        position: relative;
        height: 200px;
        background-color: #006EFB;
    }

    .cover-photo img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .profile-photo {
        position: absolute;
        bottom: -50px;
        left: 20px;
        border: 5px solid white;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        overflow: hidden;
    }

    .profile-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 100%;
    }

    .profile-info {
        text-align: left;
        margin-top: 60px;
        padding: 20px;
        border-bottom: 1px solid #dddfe2;
    }

    .profile-info h1 {
        margin: 0;
    }

    .profile-info p {
        color: #606770;
    }

    .content {
        display: flex;
        padding: 20px;
    }

    .sidebar {
        width: 30%;
        padding: 20px;
        border-right: 1px solid #dddfe2;
    }

    .main-content {
        width: 70%;
        padding: 20px;
    }

    .post {
        background-color: #fff;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .user_info table {
        border-collapse: collapse;
        width: 100%;
    }

    .user_info td {
        border-bottom: 3px solid #8A8DBA;
        padding: 8px;
        text-align: left;
    }

    .user_info {
        text-align: center;
    }

    #PL,
    #OS,
    #Database {
        width: 100%;
        height: 300px;
    }
</style>
</head>

<body>
    <div class="profile-page">
        <div class="header">
            <div class="cover-photo">
                <!-- <img src="cover-photo.jpg" alt="Cover Photo"> -->
            </div>
            <div class="profile-photo">
                <img src="../../../img/user_icon/super_user.jpg" alt="Profile Photo">
            </div>
        </div>
        <div class="profile-info">
            <h1>熊峪陞</h1>
            <p>可獨立開發專案與規劃<br>願意學習於研究新技術</p>
            <div class="user_info">
                <img id="show" src="../../../img/system_icon/down.png" width="5%" height="5%">
                <table id="tb1" style="display: none">
                    <tr>
                        <td class="title_right">性別:</td>
                        <td>男</td>
                    </tr>
                    <tr>
                        <td class="title_right">年齡:</td>
                        <td>21歲</td>
                    </tr>
                    <tr>
                        <td class="title_right">就業狀態:</td>
                        <td class="">待業中</td>
                    </tr>
                    <tr>
                        <td class="title_right">主要手機:</td>
                        <td>0978-962-512</td>
                    </tr>
                    <tr>
                        <td class="title_right">E-mail:</td>
                        <td>omgfk22@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="title_right">通訊地址:</td>
                        <td>台中市西屯區台中市***</td>
                    </tr>
                </table>
                <img id="hide" style="display:none;" src="../../../img/system_icon/up.png" width="5%" height="5%">
            </div>
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="post">
                    <h2>學歷</h2>
                    <table>
                        <tr>
                            <td>嶺東科技大學</td>
                        </tr>
                        <tr>
                            <td>資訊工程與科學系</td>
                        </tr>
                        <tr>
                            <td>狀態:就讀中</td>
                        </tr>
                        <td>就學期間:2021/8~2025/6</td>
                        <tr>
                            <td>私立嶺東高中</td>
                        </tr>
                        <tr>
                            <td>資訊科</td>
                        </tr>
                        <tr>
                            <td>狀態:畢業</td>
                        </tr>
                        <td>就學期間:2017/8~2021/7</td>
                    </table>
                </div>
                <div class="post">
                    <h2>技能</h2>
                    <h3>Programming Language</h3>
                    <div id="PL"></div>
                    <h3>熟練OS</h3>
                    <div id="OS"></div>
                    <h3>Database</h3>
                    <div id="Database"></div>
                </div>
            </div>
            <div class="main-content">
                <h2>工作經驗</h2>
                <div class="post">
                    <h3>職位:技術支援助理工程師</h3>
                    <h4>企業:新夥伴科技股份有限公司（電腦系統整合服務業 30~100人）</h4>
                    <h5>任職時間:2024/5~2024/7(3個月)</h5>
                    <p>工作內容:例行性職務:<br>
                        1.公司產品硬體組裝<br>
                        2.安裝OS及設定<br>
                        3.貨品檢查<br>
                        4.文書處裡<br>
                        出貨、硬體入庫....等等紀錄填寫</p>
                </div>
                <div class="post">
                    <h3>職位:助理工程師</h3>
                    <h4>開原報關股份有限公司（報關業 100~500人）</h4>
                    <h5>任職時間:2021/11~2024/5(2年7個月)</h5>
                    <p>例行型職務:<br>
                        1.ERP系統維護改版:<br>
                        *因公司草創時期無使用框架，講目前系統統一成類MVC架構，用於未來套用框架<br>
                        公司教育訓練功能及版面-改版<br>
                        ERP系統參數設定功能及版面-改版<br>
                        FAQ問答 功能及版面-改版<br>
                        電話雲端系統CSV檔透過ERP系統匯入Mysql<br>
                        (以上項目均使用PHP、CSS、Javascript、JQuery、SQL等語法製作)<br>
                        2.資料庫MYSQL維護:<br>
                        手動切換歷年Database備份<br>
                        3.報關軟體轉檔維護與報表設計:<br>
                        業務提供客戶資料(多種樣式xls、xlsx、txt)轉換至報關軟體<br>
                        報關軟體報單帶入以設計報表樣式列印<br>
                        4.報關軟體單機Access文件資料庫維護:<br>
                        使用者須新增刪除欄位供報關軟體使用<br>
                        5.網路與Server維護與架設:<br>
                        ESXI(虛擬機OS) 重灌並更換版本 並製作SOP文件<br>
                        各組網路主線布線施工<br>
                        排除網路問題<br>
                        公用點陣列印機及印表機架設<br>
                        6.日常個人電腦維護及報修<br>
                        7.擔任講師<br>
                        為業務部授課Excel 觀念及功能運用<br>
                        8.會議記錄<br>
                        會議記錄，並製作文件提交給主管簽核<br>
                        9.採購設備耗材&規劃工程，並向財務提供請款文件<br>
                        專案型職務:<br>
                        1.ERP全端系統開發功能<br>
                        網頁自動回覆Bot<br>
                        Line Bot 串接公司資料庫應用<br>
                        2.採購與比價專案規劃及報告<br>
                        公司現行使用office 2003 轉為Microsoft 365服務<br>
                        公司新增ADSL線路<br>
                        公司有意加入標籤機供業務部使用<br>
                        防止分公司再次發生停電事件，租用發電機<br>
                        3.雲端服務及AI服務開發研究將現有系統轉換雲端化<br>
                        4.與廠商接洽<br>
                        分公司重新裝潢，電力線路需重新規劃施工<br>
                        分公司電力配置加入發電機</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flot@4.2.2/dist/es5/jquery.flot.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot@4.2.2/source/jquery.flot.pie.js"></script>
    <script>
        $("#show").on("click", function() {
            $("#tb1").fadeIn(600);
            $("#hide").fadeIn(600);
            $("#show").fadeOut(600);
        });
        $("#hide").on("click", function() {
            $("#tb1").fadeOut(600);
            $("#hide").fadeOut(600);
            $("#show").fadeIn(600);
        });

        $(function() {
            var data = [{
                    label: "PHP",
                    data: 50,
                    color: "#9F35FF"
                },
                {
                    label: "Javascript",
                    data: 20,
                    color: "#E1E100"
                },
                {
                    label: "CSS",
                    data: 20,
                    color: "#0080FF"
                },
                {
                    label: "Python",
                    data: 10,
                    color: "#005AB5"
                },
            ];

            var options = {
                series: {
                    pie: {
                        show: true
                    },
                },
                legend: {
                    show: false
                },
            };

            $.plot($("#PL"), data, {
                series: {
                    pie: {
                        show: true,
                    },
                },
            });
        });

        $(function () {
				var data = [
					{ label: "Linux", data: 40, color: "#4A4AFF" },
					{ label: "Windows7、10、11", data: 40, color: "#0080FF" },
					{ label: "ESXI", data: 10, color: "#005AB5" },
					{ label: "Proxmox", data: 10, color: "#FF8000" },
				];

				var options = {
					series: {
						pie: { show: true },
					},
					legend: { show: false },
				};

				$.plot($("#OS"), data, {
					series: {
						pie: {
							show: true,
						},
					},
				});
			});

			$(function () {
				var data = [
					{ label: "Mysql", data: 80, color: "#FFA042" },
					{ label: "Access", data: 20, color: "#AD5A5A" },
				];

				var options = {
					series: {
						pie: { show: true },
					},
					legend: { show: false },
				};

				$.plot($("#Database"), data, {
					series: {
						pie: {
							show: true,
						},
					},
				});
			});
    </script>