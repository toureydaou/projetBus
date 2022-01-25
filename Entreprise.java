public class Entreprise{
	private Personne[] equipe;
	private int place = 0;
	
	public Entreprise(int tailleEquipe){
		equipe = new Personne[tailleEquipe];
	}
	
	public boolean recrute(Personne p){
		if (place < equipe.length){
			equipe[place++] = p;
			return true;
		}
		return false;
	}
	
	public void execute(){
		for (int i=0; i<place; i++){
			System.out.println("---- " + equipe[i] + " ----");
			equipe[i].cycleVie();
		}
	}
}
