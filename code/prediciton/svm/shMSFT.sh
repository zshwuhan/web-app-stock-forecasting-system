which java
cd /Users/Wuyang/Desktop/machineL/java/
 java -classpath libsvm.jar svm_scale -l 0 -u 1 -s C_price_MSFTScaleP C_price_MSFT > C_price_MSFTScale
java -classpath libsvm.jar svm_train -s 3 -t 2 -c 1 -g 1  C_price_MSFTScale
java -classpath libsvm.jar svm_scale -r C_price_MSFTScaleP C_predict_MSFT > C_predict_MSFTScale
java -classpath libsvm.jar svm_predict C_predict_MSFTScale C_price_MSFTScale.model C_predictPrice_MSFT