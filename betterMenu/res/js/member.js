var NHS = NHS || {};

NHS.Member = function(pfirst, plast){
	this.first = pfirst;
	this.last = plast;
	
	this.getName = function(){
		return [this.first,this.last];
	}

	this.getFirstName = function(){
		return this.first;
	}

	this.getLastName = function(){
		return this.last;
	}
}