pipeline {
	agent any
	stages{
		stage('Primera inicialización'){
			steps{
				sh 'echo inicializando...'
			}
		}
		stage('Checando docker'){
			steps{
				sh 'sudo docker ps'
			}
		}
	}
}
