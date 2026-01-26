pipeline {
    agent any

    stages {

        stage('Build & Deploy Containers') {
            steps {
                sh '''
                echo "Stopping old containers..."
                docker build -t test .|| true

                echo "Building and starting containers..."
                docker run -d -p 80:80 --name test test
                '''
            }
        }
    }

    post {
        success {
            echo "✅ Deployment successful via GitHub Webhook"
        }
        failure {
            echo "❌ Deployment failed"
        }
    }
}
