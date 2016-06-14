/**
 * Created by NhatHung PC on 6/5/2016.
 */
$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true
    });
    $('.slide-up').delay(3000).slideUp();
});
function xacnhanxoa(msg) {
    if (window.confirm(msg)) {
        return true;
    }
    return false;
}