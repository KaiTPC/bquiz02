<style>
    .all {
        background: rbga(51, 51, 51, 0.8);
        color: #FFF;
        min-height: 100px;
        width: 300px;
        position: fixed;
        display: none;
        z-index:9999;
        overflow:auto;
        padding:15px;

    border-radius:10px;
    box-shadow:2px 2px 10px #999;
    height:400px;

    }
</style>


<fieldset>
    <legend>目前位置：首頁 > 人氣文章區</legend>
    <table>
        <tr>
            <td width="30%">標題</td>
            <td width="40%">內容</td>
            <td>人氣</td>
        </tr>
        <?php
        $rows = $News->paginate(5, ['sh' => 1], " order by goods desc");
        foreach ($rows as $row) {
        ?>
            <tr>
                <td width="30%"><?= $row['title']; ?></td>
                <td width="40%"><?= mb_substr($row['text'], 0, 25); ?>...</td>
                <td>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- 修改db中的links 增加可以帶入參數來決定頁面的功能 -->
    <div><?= $News->links(); ?></div>
</fieldset>

<script>
    // 改成讚 收回讚呈現方式 先建好log資料表 分出使用者狀態欄位 id user type 
    $("title,.content").hover(
        function() {
            $(this).parent().find(".all").show()
        },
        function() {
            $(this).parent().find(".all").hide()
        }
    )

    $(".goods").on("click",function(){

    })
</script>