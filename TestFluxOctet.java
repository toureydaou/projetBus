Scanner sc1 = new Scanner(System.in);
int nbentier;
double nbdouble;
DataOutputStream dos = new DataOutputStream(new FileOutputStream("fichierbinaire"));
do {
	System.out.print("Entier ? ");
	nbentier = sc1.nextInt();
	System.out.print( "Double? ");
	nbdouble = sc1.nextDouble();
	dos.writeInt(nbentier);
	dos.writeDouble(nbdouble);
	System.out.println("Continuer ? O/N");
} while (sc1.next("[oOnN]").toUpperCase().equals("O"));
dos.close();
DataInputStream dis = new DataInputStream (new FileInputStream( new File("fichierbinaire")));
dis.close();
Scanner sc2 = new Scanner(args[0]).useDelimiter("[\\ s\\−]+"); //args[0]= "73 37,0"
int nbentier2 = sc2.nextInt();
double nbdouble2 = sc2.nextDouble();
System.out.printf("entier : %d, double : %.2f ", nbentier2, nbdouble2);
