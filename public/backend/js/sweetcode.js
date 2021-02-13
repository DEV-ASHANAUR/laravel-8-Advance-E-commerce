    // delete script code
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        });
    });
    // pending to confirm script code
    $(document).on('click','#confirm',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to Pending this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Confirmed it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'Confirmed!',
                'Your Order has been Confirmed.',
                'success'
                )
            }
        });
    });
    // confirm to processing script code
    $(document).on('click','#processing',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to Confirm this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Processing it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'Processing!',
                'Your Order has been Processing.',
                'success'
                )
            }
        });
    });
    // processing to picked script code
    $(document).on('click','#picked',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to Processing this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Picked it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'Picked!',
                'Your Order has been Picked.',
                'success'
                )
            }
        });
    });
    // picked to shipped script code
    $(document).on('click','#shipped',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to Picked this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, shipped it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'shipped!',
                'Your Order has been shipped.',
                'success'
                )
            }
        });
    });
    // shipped to delivered  script code
    $(document).on('click','#delivered',function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to Shipped this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delivered it!'
            }).then((result) => {
            if (result.value) {
                window.location.href = link;
                Swal.fire(
                'shipped!',
                'Your Order has been delivered.',
                'success'
                )
            }
        });
    });

