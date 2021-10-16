

/**
 * @author chris
 * @version 1.0
 * @created 16-Oct-2021 19:31:46
 */
public class Owner extends User {

	public Owner(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}

	public double showIncome(){
		return 0;
	}

	public double showOutcome(){
		return 0;
	}

}