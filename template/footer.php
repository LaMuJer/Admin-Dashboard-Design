    <script     src="<?php echo $url; ?>vendor/jquery-3.3.1.min.js" ></script>
    <script src="<?php echo $url; ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $url; ?>vendor/way_point/jquery.waypoints.js"></script>
    <script src="<?php echo $url; ?>vendor/counter_up/counter_up.js"></script>
    <script src="<?php echo $url; ?>vendor/chart_js/chart.min.js"></script>
    <script src="<?php echo $url; ?>node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="<?php echo $url; ?>js/dashboard.js"></script>
    <script src="<?php echo $url; ?>js/app.js"></script>
    <script>

        let category = ["phone","computer","tv"];
        let subCategory = [
            {name:'Samsung' , categoryId:0},
            {name:'Apple' , categoryId:0},
            {name:'Dell' , categoryId:1},
            {name:'Lenovo' , categoryId:1},
            {name:'Sony' , categoryId:2},
            {name:'Panosonic' , categoryId:2}
        ];

        category.map((el,ind)=>{
            $("#cat").append(`<option value=${ind}>${el}</option>`);
        });

        jQuery.map(subCategory,(el,i)=>{
            $('#subCat').append(`<option value="${i}" dataCategory=${el.categoryId}>${el.name}</option>`);
        })  ;

        $("#cat").on("change",()=>{
            let currentCategoryId = $("#cat").val();
            $("#subCat option").hide();
            $(`[dataCategory = ${currentCategoryId}]`).show();
        })


</script>
<script>
                $("#maximize").click(()=>{
                    
                    let current = $("#maximize").closest(".card");
                    current.toggleClass("fullCard");
                    if(current.hasClass("fullCard")) {
                        $('#maximize').html(`<i class="feather-minimize-2"></i>`);
                    } else {
                        $('#maximize').html(`<i class="feather-maximize-2"></i>`);
                    }
                });

                $("#example").dataTable();

</script>


</body>
</html>