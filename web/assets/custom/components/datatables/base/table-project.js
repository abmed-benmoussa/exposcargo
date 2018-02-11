var DatatableHtmlTableProject=function(){
	var e=function(){
		$(".m-datatable").mDatatable({
			search:{
				input:$("#generalSearch")
			},
			columns:[{
				field:"Semaforo",title:"Semáforo",type:"number"
			},
			{
				field:"Project123",title:"Project",width: 250
			},
			{
				field:"Order Date",
				type:"date",
				format:"YYYY-MM-DD"
			}]
		})
	};
	return{
		init:function(){
			e()
		}
	}
}

();jQuery(document).ready(function(){
	DatatableHtmlTableProject.init()
});